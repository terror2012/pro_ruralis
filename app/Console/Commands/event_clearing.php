<?php

namespace App\Console\Commands;

use App\Eloquent\events;
use Carbon\Carbon;
use Illuminate\Console\Command;

class event_clearing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:event-clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all the expired events!';

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
        $events = events::where('event_time', '<', Carbon::now())->get();
        $progress_bar = $this->output->createProgressBar(count($events));
        foreach($events as $event)
        {
            $event->delete();

            $progress_bar->advance();
        }
        $progress_bar->finish();
        return true;
    }
}
