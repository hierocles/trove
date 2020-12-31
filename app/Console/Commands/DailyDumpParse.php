<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Prewk\XmlStringStreamer;
use Prewk\XmlStringStreamer\Stream;
use Prewk\XmlStringStreamer\Parser;
use App\Models\Nations;
use App\Models\Regions;
use JsonSerializer\JsonSimpleXMLElementDecorator;

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
        $start = microtime(true);
        $nations_xml_file = base_path() . '/dumps/nations.xml';
        $regions_xml_file = base_path() . '/dumps/regions.xml';

        // Process nations.xml
        $stream = new Stream\File($nations_xml_file, 16384);
        $parser = new Parser\StringWalker();
        $streamer = new XmlStringStreamer($parser, $stream);

        while ($node = $streamer->getNode()) {
            $simple_xml_node = simplexml_load_string($node);

            // Convert nodes with children to JSON objects with attributes
            $freedom = new JsonSimpleXMLElementDecorator($simple_xml_node->FREEDOM);
            $govt = new JsonSimpleXMLElementDecorator($simple_xml_node->GOVT);
            $deaths = new JsonSimpleXMLElementDecorator($simple_xml_node->DEATHS);
            $freedomscores = new JsonSimpleXMLElementDecorator($simple_xml_node->FREEDOMSCORES);

            $nation = Nations::updateOrCreate(
                ['name' => (string)$simple_xml_node->NAME],
                [
                    'name' => (string)$simple_xml_node->NAME,
                    'type' => (string)$simple_xml_node->TYPE,
                    'fullname' => (string)$simple_xml_node->FULLNAME,
                    'motto' => (string)$simple_xml_node->MOTTO,
                    'category' => (string)$simple_xml_node->CATEGORY,
                    'unstatus' => (string)$simple_xml_node->UNSTATUS,
                    'endorsements' => (string)$simple_xml_node->ENDORSEMENTS,
                    'issues_answered' => (int)$simple_xml_node->ISSUES_ANSWERED,
                    'freedom' => json_encode($freedom),
                    'region' => (string)$simple_xml_node->REGION,
                    'population' => (int)$simple_xml_node->POPULATION,
                    'tax' => (int)$simple_xml_node->TAX,
                    'animal' => (string)$simple_xml_node->ANIMAL,
                    'currency' => (string)$simple_xml_node->CURRENCY,
                    'demonym' => (string)$simple_xml_node->DEMONYM,
                    'demonym2' => (string)$simple_xml_node->DEMONYM2,
                    'demonym2plural' => (string)$simple_xml_node->DEMONYM2PLURAL,
                    'flag' => (string)$simple_xml_node->FLAG,
                    'majorindustry' => (string)$simple_xml_node->MAJORINDUSTRY,
                    'govtpriority' => (string)$simple_xml_node->GOVTPRIORITY,
                    'govt' => json_encode($govt),
                    'founded' => (string)$simple_xml_node->FOUNDED,
                    'firstlogin' => (int)$simple_xml_node->FIRSTLOGIN,
                    'lastlogin' => (int)$simple_xml_node->LASTLOGIN,
                    'lastactivity' => (int)$simple_xml_node->LASTACTIVITY,
                    'influence' => (string)$simple_xml_node->INFLUENCE,
                    'freedomscores' => json_encode($freedomscores),
                    'publicsector' => (string)$simple_xml_node->PUBLICSECTOR,
                    'deaths' => json_encode($deaths),
                    'leader' => (string)$simple_xml_node->LEADER,
                    'capital' => (string)$simple_xml_node->CAPITAL,
                    'religion' => (string)$simple_xml_node->RELIGION,
                    'factbooks' => (string)$simple_xml_node->FACTBOOKS,
                    'dispatches' => (string)$simple_xml_node->DISPATCHES,
                    'dbid' => (int)$simple_xml_node->DBID
                ]
            );
            $this->info('Processed nation: ' . $nation->name);
        }

        // Process regions.xml
        $stream = new Stream\File($regions_xml_file, 16384);
        $parser = new Parser\StringWalker();
        $streamer = new XmlStringStreamer($parser, $stream);

        while ($node = $streamer->getNode()) {
            $simple_xml_node = simplexml_load_string($node);

            // Convert nodes with children to JSON objects with attributes
            $officers = new JsonSimpleXMLElementDecorator($simple_xml_node->OFFICERS);
            $embassies = new JsonSimpleXMLElementDecorator($simple_xml_node->EMBASSIES);

            // Convert nations node to JSON string
            $nations_json = json_encode(explode(':', (string)$simple_xml_node->NATIONS));

            $region = Regions::updateOrCreate(
                ['name' => $simple_xml_node->NAME],
                [
                    'name' => (string)$simple_xml_node->NAME,
                    'factbook' => (string)$simple_xml_node->FACTBOOK,
                    'numnations' => (int)$simple_xml_node->NUMNATIONS,
                    'nations' => $nations_json,
                    'delegate' => (string)$simple_xml_node->DELEGATE,
                    'delegatevotes' => (int)$simple_xml_node->DELEGATEVOTES,
                    'delegateauth' => (string)$simple_xml_node->DELEGATEAUTH,
                    'founder' => (string)$simple_xml_node->FOUNDER,
                    'founderauth' => (string)$simple_xml_node->FOUNDERAUTH,
                    'officers' => json_encode($officers),
                    'power' => (string)$simple_xml_node->POWER,
                    'flag' => (string)$simple_xml_node->FLAG,
                    'embassies' => json_encode($embassies),
                    'lastupdate' => (int)$simple_xml_node->LASTUPDATE
                ]
            );
            $this->info('Processed region: ' . $region->name);
        }

        $end = microtime(true);
        $time = number_format($end - $start, 2);
        $this->info('Finished in ' . $time . ' seconds.');
    }
}
