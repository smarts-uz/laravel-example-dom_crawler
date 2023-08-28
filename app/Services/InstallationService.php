<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class InstallationService
{
    public function start(): void
    {
        $html = <<<'HTML'
<!DOCTYPE html>
<html>
    <body>
        <p class="message">Hello World!</p>
        <p>Hello Crawler!</p>
    </body>
</html>
HTML;

        $crawler = new Crawler($html);

        foreach ($crawler as $domElement) {
            var_dump($domElement->textContent);
        }
    }
}
