<?php

namespace App\Console\Commands;

use App\Services\AccessingNodeValuesService;
use App\Services\AddingTheContentService;
use App\Services\ExpressionEvaluationService;
use App\Services\InstallationService;
use App\Services\LinksService;
use App\Services\NodeFilteringService;
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
//        $nodeTravers->start();

        $nodeFilter = new NodeFilteringService();
//        $nodeFilter->start();

        $accessValue = new AccessingNodeValuesService();
//        $accessValue->start();

        $add = new AddingTheContentService();
//        $add->start();

        $expression = new ExpressionEvaluationService();
//        $expression->start();

        $links = new LinksService();
        $links->start();

    }
}
