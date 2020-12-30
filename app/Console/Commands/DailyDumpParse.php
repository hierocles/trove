<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Prewk\XmlStringStreamer;
use Prewk\XmlStringStreamer\Stream;
use Prewk\XmlStringStreamer\Parser;

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
        /*
        * Use xml-string-streamer to iterate through <nation> entries
        * Check if nation entry exists in database
        * If yes, update entry
        * If no, create new entry
        */
    }
}
