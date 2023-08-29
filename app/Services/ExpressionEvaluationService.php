<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ExpressionEvaluationService
{
    public function start()
    {
        $html = '<html>
<body>
    <span id="article-100" class="article">Article 1</span>
    <span id="article-101" class="article">Article 2</span>
    <span id="article-102" class="article">Article 3</span>
</body>
</html>';

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);


//        dump($crawler->filterXPath('//span[contains(@id, "article-")]')
//            ->evaluate('substring-after(@id, "-")'));

//        dump($crawler->evaluate('substring-after(//span[contains(@id, "article-")]/@id, "-")'));

//        dump($crawler->filterXPath('//span[@class="article"]')
//            ->evaluate('count(@id)'));

//        dump($crawler->evaluate('count(//span[@class="article"])'));

        dump($crawler->evaluate('//span[1]')->html());
    }
}
