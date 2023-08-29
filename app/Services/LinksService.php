<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class LinksService
{
    public function start():void
    {
        $html = '<html lang="en">
<body>
    <span id="article-100" class="article">Article 1</span>
    <span id="article-101" class="article">Article 2</span>
    <span id="article-102" class="article">Article 3</span>
    <a href="https://www.olx.uz" class="link">olx.uz</a>
    <a href="https://www.mover.uz" id="url">mover.uz</a>
    <a href="https://www.mail.ru">Log in</a>
</body>
</html>';

        $crawler = new Crawler($html);

        $linkCrawler1 = $crawler->filter('#url');
        $linkCrawler2 = $crawler->filter('.link');
        $linkCrawler3 = $crawler->selectLink('Log in');

        dump($linkCrawler1->link()->getUri());

        dump($linkCrawler2->link()->getMethod());

        dump($linkCrawler3->link()->getNode()->tagName);


    }
}
