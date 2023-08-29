<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ImagesService
{
    public function start()
    {
        $html = '<html lang="en">
<body>
   <img src="https://th.bing.com/th/id/OIP.HxV79tFMPfBAIo0BBF-sOgHaEy?w=291&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="alt-1">
    <img src="https://th.bing.com/th/id/OIP.fzSnClvueUiDCZNJINMWywHaEK?w=376&h=180&c=7&r=0&o=5&pid=1.7" alt="alt-2">


</body>
</html>';

        $crawler = new Crawler($html);
        $imagesCrawler = $crawler->selectImage('alt-2');
        $image = $imagesCrawler->image();
        dump($image->getUri());
    }
}
