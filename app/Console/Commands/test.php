<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Added';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $user = DB::table('users')->insert(['name' => "Masud", 'email' => 'masud2@mail.com', 'password'=>bcrypt('123456')]);
        $this->info('Successfully Added User');
 
    }
}
