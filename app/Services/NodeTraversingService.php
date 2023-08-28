<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;
use function Laravel\Prompts\text;

class NodeTraversingService
{
    public function start()
    {
        $html = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
    <body>
        <a data-id="100" href="#">link-1</a>
<!--        <a href="#">link-2</a>-->
        <p data-id="100" class="message">Hello World!</p>
        <p data-id="100">Tag p</p>
        <p data-id="100">lorem lorem ipsum ...</p>
        <p data-id="100">Hello Crawler!</p>
        <p data-id="100">Some text</p>
        <div>
            <p class="lorem">Lorem1</p>
            <p class="lorem">Lorem2</p>
            <p class="lorem">Lorem3</p>
        </div>

    </body>
</html>
HTML;

        $crawler = new Crawler($html);

//       dump($crawler->filter('body > p')->eq(1)->text());
//       dump($crawler->filter('body > p')->first()->text());
//       dump($crawler->filter('body > p')->last()->text());
//       dump($crawler->filter('body > p')->siblings()->text()); data-id=100
//        dump( $crawler->filter('body > p')->nextAll()->text());
//        dump($crawler->filter('body > p')->previousAll()->text());

//        dump($crawler->filter('body')->children()->last()->text());
//        dump($crawler->filter('body > p')->ancestors()->text());
//        dump($crawler->filter('body')->children('p.lorem')->text());
//        $item = $crawler->filter('body')->children('p.lorem');
//        foreach ($item as $el){
//            dump($el->textContent);
//        }
        $closest = $crawler->closest('p.lorem');
        dump($crawler->closest('p.lorem'));


    }
}
