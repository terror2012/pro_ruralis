<?php

namespace App\Console\Commands;

use App\Eloquent\sponsors;
use App\User;
use Illuminate\Console\Command;

class database_normalization extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:db-norm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Normalizing the database, against fake/corrupt data';

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
        $sponsors = sponsors::all();
        foreach($sponsors as $sponsor)
        {
            if(User::find($sponsor->user_id)->account_type !== 2)
            {
                $this->info('Sponsor ' . User::find($sponsor->user_id)->name . '\'s record deleted, because of faulty access level. Access level -> ' . User::find($sponsor->user_id)->account_type);
                $sponsor->delete();
            }
        }
    }
}
