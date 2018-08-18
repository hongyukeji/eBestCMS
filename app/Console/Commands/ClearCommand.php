<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all compiled cache all files';

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
        $this->line("开始执行缓存命令");

        Artisan::call("clear-compiled");

        Artisan::call("auth:clear-resets");
        $this->info('Expired reset tokens cleared!');

        Artisan::call("cache:clear");
        $this->info('Application cache cleared!');

        Artisan::call("session:clear");
        $this->info('Session cache cleared!');

        Artisan::call("config:clear");
        $this->info('Configuration cache cleared!');

        //Artisan::call("debugbar:clear");
        //$this->info('Debugbar Storage cleared!');

        Artisan::call("route:clear");
        $this->info('Route cache cleared!');

        Artisan::call("view:clear");
        $this->info('Compiled views cleared!');

        Artisan::call("log:clear");
        $this->info('Log cache cleared!');

        $this->info("清除缓存成功");
    }
}
