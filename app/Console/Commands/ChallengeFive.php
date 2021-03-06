<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ChallengeFive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'techchallenge:five';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run tech challenge five';

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
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
