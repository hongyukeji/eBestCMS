<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init Install';

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
        $this->line('开始执行初始化安装...');

        if ($this->confirm('执行数据库回滚迁移吗?', true)) {
            $this->call('migrate:fresh');
            $this->call('db:seed');
            $this->call('voyager:install');
            if (function_exists('exec')) {
                exec("php artisan voyager:admin " . User::find(1)->email);
            }
        } else {
            $this->warn("取消数据库回滚迁移命令");
        }

        if ($this->confirm('执行设置应用程序密钥')) {
            $this->call('key:generate');
        } else {
            $this->warn("取消设置应用程序密钥命令");
        }

        if ($this->confirm('执行生成 app/public/static 软链接吗?')) {
            if (file_exists(storage_path('app/public/static'))) {
                $this->warn('The "app/public/static" directory already exists.');
            } else {
                $this->laravel->make('files')->link(
                    public_path('static'), storage_path('app/public/static')
                );
                $this->info('The [app/public/static] directory has been linked.');
            }
        } else {
            $this->warn("取消生成 app/public/static 软链接命令");
        }

        if ($this->confirm('执行清除缓存?')) {

            $this->call('clear:cache');

        } else {
            $this->warn("取消清除缓存命令");
        }

        if ($this->confirm('执行优化缓存?')) {
            $this->line("开始执行优化缓存命令");

            Artisan::call("config:cache");
            $this->info('Configuration cache cleared!');
            $this->info('Configuration cached successfully!');

            Artisan::call("route:cache");
            $this->info('Route cache cleared!');
            $this->info('Routes cached successfully!');

            Artisan::call("optimize");
            $this->info('Generating optimized class loader');

            if (function_exists('exec')) {
                exec("composer dump-autoload");
            }

            $this->info("优化缓存成功");
        } else {
            $this->warn("取消优化缓存命令");
        }

        $this->info('执行初始化安装命令成功！');

    }
}
