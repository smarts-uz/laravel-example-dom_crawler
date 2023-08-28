<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class NodeFilteringService
{
    public function start(): void
    {
        $html = <<<'HTML'
            <!DOCTYPE html>
            <html lang="en">
                <body>
                     <p>777</p>
                    <p class="message">Hello World!</p>
                    <p>Hello Crawler!</p>
                    <p>123</p>
                </body>
            </html>
            HTML;

        $crawler = new Crawler($html);

        $crawler = $crawler->filter('body > p');
//        dump($crawler);

        //========================

        $crawler1 = $crawler
            ->filter('body > p')
            ->reduce(function (Crawler $node, $i): bool {
                // filters every other node
                dump($node->html());
                return ($i % 2) === 0;
            });



    }
}
