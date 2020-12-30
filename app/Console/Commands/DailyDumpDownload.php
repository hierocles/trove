<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyDumpDownload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download the nations and region daily dump files from NationStates';

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
        $nations_uri = 'https://www.nationstates.net/pages/nations.xml.gz';
        $regions_uri = 'https://www.nationstates.net/pages/regions.xml.gz';

        $nations_gzfile = base_path() . '/dumps/nations.xml.gz';
        $nations_xmlfile = base_path() . '/dumps/nations.xml';
        $regions_gzfile = base_path() . '/dumps/regions.xml.gz';
        $regions_xmlfile = base_path() . '/dumps/regions.xml';

        $stream_opts = [
            'http' => [
                'method' => 'GET',
                'user_agent' => 'Glen-Rhodes - Daily Dump Downloader - dylan.hierocles@gmail.com'
            ]
        ];
        $stream_context = stream_context_create($stream_opts);
        $buffer_size = 4096;

        $this->info('Downloading nations.xml.gz ... ');
        $remote_file = fopen($nations_uri, 'r', 0, $stream_context);
        if ($remote_file === false) {
            $this->info('Something went wrong donwloading the file.');
        } else {
            $local_file = fopen($nations_gzfile, 'wb');
            while (!feof($remote_file)) {
                $buffer = fread($remote_file, $buffer_size);
                fwrite($local_file, $buffer);
            }
            fclose($local_file);
            fclose($remote_file);
            $this->info('Downloaded nations.xml.gz succesfully.');
        }

        $this->info('Downloading regions.xml.gz ... ');
        $remote_file = fopen($regions_uri, 'r', 0, $stream_context);
        if ($remote_file === false) {
            $this->info('Something went wrong donwloading the file.');
        } else {
            $local_file = fopen($regions_gzfile, 'wb');
            while (!feof($remote_file)) {
                $buffer = fread($remote_file, $buffer_size);
                fwrite($local_file, $buffer);
            }
            fclose($local_file);
            fclose($remote_file);
            $this->info('Downloaded regions.xml.gz succesfully.');
        }

        if (file_exists($nations_gzfile)) {
            $this->info('Decompressing nations.xml.gz ...');
            $local_file = gzopen($nations_gzfile, 'rb');
            $decompressed_file = fopen($nations_xmlfile, 'wb');

            while (!gzeof($local_file)) {
                fwrite($decompressed_file, gzread($local_file, $buffer_size));
            }
            fclose($decompressed_file);
            gzclose($local_file);
            $this->info('Decompression complete, nations.xml created.');
        }

        if (file_exists($regions_gzfile)) {
            $this->info('Decompressing regions.xml.gz ...');
            $local_file = gzopen($regions_gzfile, 'rb');
            $decompressed_file = fopen($regions_xmlfile, 'wb');

            while (!gzeof($local_file)) {
                fwrite($decompressed_file, gzread($local_file, $buffer_size));
            }
            fclose($decompressed_file);
            gzclose($local_file);
            $this->info('Decompression complete, regions.xml created.');
        }
    }
}
