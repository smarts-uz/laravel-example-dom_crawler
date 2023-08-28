<?php

namespace App\Console\Commands;

use App\Services\InstallationService;
use App\Services\NodeTraversingService;
use Illuminate\Console\Command;

class Crawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $install = new InstallationService();
//        $install->start();
        $nodeTravers = new NodeTraversingService();
        $nodeTravers->start();



    }
}
