<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class AddingTheContentService
{
    public function start()
    {
        $crawler = new Crawler('<html lang="en"><body/></html>');
//        dump($crawler->html());

        $crawler1 = new Crawler();
//        $crawler1->addHtmlContent('<html lang="en"><body/></html>');
//        dump($crawler1->html());

        $crawler1->addXmlContent('<root><node/></root>');
//        dump($crawler1->html());

        $crawler2 = new Crawler();
//        $crawler2->addContent('<html lang="en"><body/></html>');
//        dump($crawler2->html());

//        $crawler2->addContent('<root><node/></root>', 'text/xml');
//        dump($crawler2->html());

//        $crawler2->add('<html><body/></html>');
        $crawler2->add('<root><node/></root>');
//        dump($crawler2->html());

        $domDocument = new \DOMDocument();
        $domDocument->loadXml('<root><node/><node class="main"/></root>');
        $nodeList = $domDocument->getElementsByTagName('node');
//        dump($nodeList->item(1)->nodeName);

        $node = $domDocument->getElementsByTagName('node')->item(0);
//        dump($node->nodeName);

        $crawler3 = new Crawler();
        $crawler3->addDocument($domDocument);
//        dump($crawler3->html());

        $crawler4 = new Crawler();
//        dump($crawler4->addNodeList($nodeList));
//        dump($crawler4->addNodes([$node]));
//        dump($crawler4->addNode($node));


        $html = '';

        $crawler5 = new Crawler('<div><p>Text</p></div>');
//        foreach ($crawler5 as $domElement) {
//            $html .= $domElement->ownerDocument->saveHTML($domElement);
//            dump($html);
//        }

//        dump($crawler5->html());
        dump($crawler5->html('Default <strong>HTML</strong> content'));





    }
}
