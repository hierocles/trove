<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\DailyDumpDownload::class,
        Commands\DailyDumpParse::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('api:download')->timezone('America/Los_Angeles')->dailyAt('23:00')->withoutOverlapping();
        $schedule->command('api:parse')->timezone('America/Los_Angeles')->dailyAt('23:15')->withoutOverlapping();
    }
}
