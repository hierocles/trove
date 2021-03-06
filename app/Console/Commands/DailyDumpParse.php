<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Prewk\XmlStringStreamer;
use Prewk\XmlStringStreamer\Stream;
use Prewk\XmlStringStreamer\Parser;
use JsonSerializer\JsonSimpleXMLElementDecorator;
use App\Models\LastUpdate;
use App\Models\Nations;
use App\Models\Regions;

class DailyDumpParse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse the XML contents of the daily dumps and write to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Processing nations XML (this will take a few minutes)...');

        $start = microtime(true);

        $nations_xml_file = base_path() . '/storage/dumps/nations.xml';
        $nations_csv_file = base_path() . '/storage/dumps/nations.csv';
        $regions_xml_file = base_path() . '/storage/dumps/regions.xml';
        $regions_csv_file = base_path() . '/storage/dumps/regions.csv';

        $nations_table = with(new \App\Models\Nations())->getTable();
        $regions_table = with(new \App\Models\Regions())->getTable();

        // Let's count entries
        $i = 0;

        // Process nations.xml
        $stream = new Stream\File($nations_xml_file, 16384);
        $parser = new Parser\StringWalker();
        $streamer = new XmlStringStreamer($parser, $stream);

        while ($node = $streamer->getNode()) {
            $xml = simplexml_load_string($node);

            // Convert nodes with children to JSON objects with attributes
            $freedom = new JsonSimpleXMLElementDecorator($xml->FREEDOM);
            $govt = new JsonSimpleXMLElementDecorator($xml->GOVT);
            $deaths = new JsonSimpleXMLElementDecorator($xml->DEATHS);
            $freedomscores = new JsonSimpleXMLElementDecorator($xml->FREEDOMSCORES);

            $apiname = str_replace(' ', '_', strtolower($xml->NAME));

            $nation_array = [
                (string)$xml->NAME,
                (string)$apiname,
                (string)$xml->TYPE,
                (string)$xml->FULLNAME,
                (string)$xml->MOTTO,
                (string)$xml->CATEGORY,
                (string)$xml->UNSTATUS,
                (string)$xml->ENDORSEMENTS,
                (int)$xml->ISSUES_ANSWERED,
                json_encode($freedom, JSON_NUMERIC_CHECK),
                (string)$xml->REGION,
                (int)$xml->POPULATION,
                (int)$xml->TAX,
                (string)$xml->ANIMAL,
                (string)$xml->CURRENCY,
                (string)$xml->DEMONYM,
                (string)$xml->DEMONYM2,
                (string)$xml->DEMONYM2PLURAL,
                (string)$xml->FLAG,
                (string)$xml->MAJORINDUSTRY,
                (string)$xml->GOVTPRIORITY,
                json_encode($govt, JSON_NUMERIC_CHECK),
                (string)$xml->FOUNDED,
                (int)$xml->FIRSTLOGIN,
                (int)$xml->LASTLOGIN,
                (int)$xml->LASTACTIVITY,
                (string)$xml->INFLUENCE,
                json_encode($freedomscores, JSON_NUMERIC_CHECK),
                (string)$xml->PUBLICSECTOR,
                json_encode($deaths, JSON_NUMERIC_CHECK),
                (string)$xml->LEADER,
                (string)$xml->CAPITAL,
                (string)$xml->RELIGION,
                (string)$xml->FACTBOOKS,
                (string)$xml->DISPATCHES,
                (int)$xml->DBID
            ];

            $handler = fopen($nations_csv_file, 'a');
            fputcsv($handler, $nation_array);
            fclose($handler);
            $i++;
        }

        $this->info('Processed ' . $i . ' nation entries. Processing regions XML (this will take a few minutes)...');

        $i = 0;

        // Process regions.xml
        $stream = new Stream\File($regions_xml_file, 16384);
        $parser = new Parser\StringWalker();
        $streamer = new XmlStringStreamer($parser, $stream);

        while ($node = $streamer->getNode()) {
            $xml = simplexml_load_string($node);

            $officers = [];
            $embassies = [];

            foreach ($xml->OFFICERS->OFFICER as $officer) {
                $officers[] = [
                    'officer' => [
                        'nation' => (string)$officer->NATION,
                        'office' => (string)$officer->OFFICE,
                        'authority' => (string)$officer->AUTHORITY,
                        'time' => (int)$officer->TIME,
                        'by' => (string)$officer->BY,
                        'order' => (int)$officer->ORDER
                    ]
                ];
            }

            // Convert XML entries with attributes to JSON elements
            foreach ($xml->EMBASSIES->EMBASSY as $embassy) {
                 $embassies[] = new JsonSimpleXMLElementDecorator($embassy);
            }

            // Change the delimiter on the nations string for consistency
            $nations = str_replace(':', ',', (string)$xml->NATIONS);

            $apiname = str_replace(' ', '_', strtolower($xml->NAME));

            $region_array = [
                (string)$xml->NAME,
                (string)$apiname,
                (string)$xml->FACTBOOK,
                (int)$xml->NUMNATIONS,
                (string)$nations,
                (string)$xml->DELEGATE,
                (int)$xml->DELEGATEVOTES,
                (string)$xml->DELEGATEAUTH,
                (string)$xml->FOUNDER,
                (string)$xml->FOUNDERAUTH,
                json_encode($officers),
                (string)$xml->POWER,
                (string)$xml->FLAG,
                json_encode($embassies),
                (int)$xml->LASTUPDATE
            ];

            $handler = fopen($regions_csv_file, 'a');
            fputcsv($handler, $region_array);
            fclose($handler);
            $i++;
        }

        $this->info('Processed ' . $i . ' region entries.');

        $this->info('Inserting nations into database...');

        // Delete existing database records
        Nations::truncate();
        Regions::truncate();

        $query = "LOAD DATA LOCAL INFILE '" . $nations_csv_file . "' INTO TABLE " . $nations_table .
            " FIELDS TERMINATED BY ',' ENCLOSED BY '\\\"' LINES TERMINATED BY '\\n'";
        $cmd = 'mysql --local-infile=1 -u ' . env('DB_USERNAME') . ' -p' . env('DB_PASSWORD') . ' ' .
            env('DB_DATABASE') . ' -e "' . $query . '"';
        shell_exec($cmd);

        LastUpdate::where('type', 'nation')->update(['type' => 'nation']);

        $this->info('Done.');

        $this->info('Inserting regions into database... ');

        $query = "LOAD DATA LOCAL INFILE '" . $regions_csv_file . "' INTO TABLE " . $regions_table .
            " FIELDS TERMINATED BY ',' ENCLOSED BY '\\\"' LINES TERMINATED BY '\\n'";
        $cmd = 'mysql --local-infile=1 -u ' . env('DB_USERNAME') . ' -p' . env('DB_PASSWORD') . ' ' .
            env('DB_DATABASE') . ' -e "' . $query . '"';
        shell_exec($cmd);

        LastUpdate::where('type', 'region')->update(['type' => 'region']);

        $this->info('Done.');


        $end = microtime(true);
        $time = number_format($end - $start, 2);
        $this->info('Finished in ' . $time . ' seconds.');

        // We no longer need the CSV files
        unlink($nations_csv_file);
        unlink($regions_csv_file);
    }
}
