<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class AccessingNodeValuesService
{
    public function start(): void
    {
        $html = <<<'HTML'
            <!DOCTYPE html>
            <html lang="en">
                <body>
                     <p class="text" name="tagP">foo</p> \n
                    <p class="message">Hello World!</p>
                    <p>Hello Crawler!</p>
                    <p>123</p>
                    <div>
                       <a href="#"Link></a>
                    </div>
                    <span>FOoo Bar 123asd asdasd</span>
                    <section></section>
                </body>
            </html>
            HTML;

        $crawler = new Crawler($html);
        $tag = $crawler->filterXPath('//body/*')->nodeName();
//        dump($tag);

        // if the node does not exist, calling to text() will result in an exception
        $message = $crawler->filterXPath('//body/p')->text();
//        dump($message);

        // avoid the exception passing an argument that text() returns when node does not exist
        $message2 = $crawler->filterXPath('//body/span')->text('Default text content');
//        dump($message2);

        // by default, text() trims whitespace characters, including the internal ones
// (e.g. "  foo\n  bar    baz \n " is returned as "foo bar baz")
// pass FALSE as the second argument to return the original text unchanged
//        dump($crawler->filterXPath('//body/p')->text('Default text content', false));

//        dump($crawler->filterXPath('//body/span')->innerText());

        $text = $crawler->filterXPath('//body/span')->innerText(true);
//        dump($text);
//        dump($crawler->filterXPath('//body/p')->attr('name'));

//        $attributes = $crawler
//            ->filterXpath('//body/p')
//            ->extract(['_name', '_text', 'class'])
//        ;
//
//        foreach ($attributes as $el)
//        {
//            dump('Tag name: '.$el[0]. ' Text: '.$el[1] . ' Class: '.$el[2]);
//
//        }

//        $nodeValues = $crawler->filter('p')->each(function (Crawler $node, $i): string {
//            dump($node->innerText());
//            return $node->text();
//        });


        $parentCrawler = new Crawler($html);
        $subCrawler = $parentCrawler->filterXPath('parent/sub-tag/sub-child-tag');
        dump($subCrawler->count());



    }


}
