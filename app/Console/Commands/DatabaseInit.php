<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use PDO;
use PDOException;

class DatabaseInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:db_init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $database = Config::get('app.DB_DATABASE');

        if (!$database) {
            $this->error('No Database specified in .env');
            return;
        }

        $driver = 'mysql:host=localhost';
        $username = Config::get('app.DB_USERNAME');
        $password = Config::get('app.DB_PASSWORD');
        $db_name = Config::get('app.DB_DATABASE');

        try {
            $DB = new PDO($driver, $username, $password);

            $DB->query("CREATE DATABASE IF NOT EXISTS ".$db_name);

            $this->info('Database successfully created');

        } catch (PDOException $e) {
            $this->error($e->getMessage());
        }

        $this->call('migrate');

        return;
    }
}
