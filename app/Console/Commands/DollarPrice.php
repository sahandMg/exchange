<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Setting;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Crawler;
use Psr\Http\Message\ResponseInterface;

class DollarPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dollar:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'getting dollar price + BTC price';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = 'https://www.tasnimnews.com/fa/currency';
        $config = [
            'referer' => true,
            'headers' => [
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
                'Accept-Encoding' => 'gzip, deflate, br',
            ],
        ];
        $client = new GuzzleClient();
        $promise = $client->requestAsync('GET',$url,$config)->then(function (ResponseInterface $response) {
            $this->resp = $response->getBody()->getContents();
            return $this->resp;
        });
        $promise->wait();
        $xPath = '//table[contains(@class, "coins-table")]';
        $crawler = new Crawler($this->resp);
        $DollarPrices = $crawler->filterXPath($xPath);
        $crawledPrices = $DollarPrices->each(
            function (Crawler $node, $i) {

                return $node->text();
            });
        $crawledPrices = explode(' ',$crawledPrices[0])[19];
        // convert persian num to english
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];

        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $crawledPrices);
        $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);
        $toman = floatval(str_replace(',','',$englishNumbersOnly))/10;
        $settings = Setting::first();
        if($toman <= 10){

            $settings->update(['usd_toman'=> 13000]);
        }
        dd($toman);

        $settings->update(['usd_toman'=>$toman]);
    }
}
