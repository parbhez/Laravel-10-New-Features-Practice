<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
//         Run backup Manualy
// You can backup your app by running:
    // php artisan backup:run

// If you want to backup to a specific disk instead of all disks, run:
        // php artisan backup:run --only-to-disk=name-of-your-disk

// If you only need to backup the db, run:
        // php artisan backup:run --only-db

// If you only need to backup the files, and want to skip dumping the databases, run:
        // php artisan backup:run --only-files


        //         $schedule->command('backup:clean')
//   ->dailyAt('03:00')
//   ->runInBackground();

// $schedule->command('backup:run', ['--only-db'])
//   ->dailyAt('04:00')
//   ->runInBackground();


        // $schedule->command('inspire')->hourly();
        // $schedule->command('backup:clean')
        // ->onFailure(function () {
        //     echo "Clean Failed";
        //   })
        //   ->onSuccess(function () {
        //       echo "Clean Success";
        //   })
        //   ->everyMinute();
   
        // $schedule
        // ->command('backup:run')
        // ->onFailure(function () {
        //   echo "Store Failed";
        // })
        // ->onSuccess(function () {
        //     echo "Store Success";
        // })
        // ->everyMinute();

        // $schedule->call(function () {
        //     $user = DB::table('users')->insert(['name' => "Masud", 'email' => 'masud@mail.com', 'password'=>bcrypt('123456')]);
        //     if($user){
        //         echo "Success";
        //     }else{
        //         echo "failed";
        //     }
        // })->everyMinute();




        // app/Console/Kernel.php 
        //php artisan schedule:run   

        $schedule->command('backup:clean');
        $schedule->command('backup:run', ['--only-db']);
        //$schedule->command('users:create');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
