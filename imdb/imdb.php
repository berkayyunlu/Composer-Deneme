<?php

require  __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://www.imdb.com/search/title/?groups=top_100&sort=user_rating,desc');

//echo $response->getStatusCode(); // 200
//echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
$htmlString = $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
// Send an asynchronous request.
//$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
//$promise = $client->sendAsync($request)->then(function ($response) {
//    echo 'I completed! ' . $response->getBody();
//});

//$promise->wait();

$crawler = new Crawler($htmlString);

$movie = $crawler
    ->filter('.lister-list > .lister-item');

print_r($movie->first());
die;
//$productTitle = $crawler->filter('div[class="lister-list"] >div[class="lister-item-content"]> h3[class="lister-item-header"] > a')->text();
//print_r($productTitle);
//div[class="lister-list detail sub-list"] > div[class="lister-list"] > div[class="lister-item mode-advanced]




//printf("Right now is %s", Carbon::now()->toDateTimeString());
//printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver'));  //implicit __toString()
//$tomorrow = Carbon::now()->addDay();
//$lastWeek = Carbon::now()->subWeek();
//$nextSummerOlympics = Carbon::createFromDate(2016)->addYears(4);
//
//$officialDate = Carbon::now()->toRfc2822String();
//
//$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;
//
//$noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');
//
//$internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');
//
//// Don't really want this to happen so mock now
//Carbon::setTestNow(Carbon::createFromDate(2000, 1, 1));
//
//// comparisons are always done in UTC
//if (Carbon::now()->gte($internetWillBlowUpOn)) {
//    die();
//}
//
//// Phew! Return to normal behaviour
//Carbon::setTestNow();
//
//if (Carbon::now()->isWeekend()) {
//    echo 'Party!';
//}
//// Over 200 languages (and over 500 regional variants) supported:
//echo Carbon::now()->subMinutes(2)->diffForHumans(); // '2 minutes ago'
//echo Carbon::now()->subMinutes(2)->locale('zh_CN')->diffForHumans(); // '2分钟前'
//echo Carbon::parse('2019-07-23 14:51')->isoFormat('LLLL'); // 'Tuesday, July 23, 2019 2:51 PM'
//echo Carbon::parse('2019-07-23 14:51')->locale('fr_FR')->isoFormat('LLLL'); // 'mardi 23 juillet 2019 14:51'
//
//// ... but also does 'from now', 'after' and 'before'
//// rolling up to seconds, minutes, hours, days, months, years
//
//$daysSinceEpoch = Carbon::createFromTimestamp(0)->diffInDays();

//$url = "https://www.imdb.com/search/title/?groups=top_100&sort=user_rating,desc";
//$html = file_get_contents($url);

//$html = <<<'HTML'
//<!DOCTYPE html>
//<html>
//    <body>
//        <p class="message">Hello World!</p>
//        <p>Hello Crawler!</p>
//    </body>
//</html>
//HTML;
//
//$crawler = new Crawler($html);
//
//foreach ($crawler as $domElement) {
//    var_dump($domElement->nodeName);
//}
