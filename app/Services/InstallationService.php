<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class InstallationService
{
    public function start(): void
    {
        $html = <<<'HTML'
            <!DOCTYPE html>
            <html lang="en">
                <body>
                    <p class="message">Hello World!!!</p>
                    <p>Hello Crawler!</p>
                    <a href="https://google.com">google.com</a>
                    <a href="https://ya.ru">ya.ru</a>
                    <a href="https://mover.uz">mover.uz</a>
                </body>
            </html>
            HTML;

        $crawler = new Crawler($html);

        foreach ($crawler as $domElement) {
            var_dump($domElement->textContent);
        }
    }
}
