<?php

namespace App\Services;


use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\DomCrawler\UriResolver;


class FormsService
{
    public function start()
    {
        $html = <<<'HTML'
            <!DOCTYPE html>
            <html lang="en">
                <body>
                     <form>
                     <input type="email" name="email" id="email" value="Enter email">
                     <input type="submit" value="Submit" class="btn_submit">
                     </form>
                </body>
            </html>
            HTML;
        $url =UriResolver::resolve('content/movies/3/1', 'https://cinerama.uz/');
        $crawler = new Crawler($url);
        dump($crawler);
//        dump($crawler->filter('FormInput_formInput__1Mf6a FormInput_hasError__24_aa')->attr('name'));
//        dump($crawler->selectButton('Войти')->attr('type'));
       $value = $crawler->filter('#email')->attr('value');
//        $echo = $crawler->selectButton('Submit')->form([
//            'email' => $value
//        ]);
//        dump($echo);
    }
}
