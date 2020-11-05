<?php
namespace App\Repositories;

use GuzzleHttp\Client;
use Scheb\YahooFinanceApi\ApiClientFactory;

class YahooDataRepository
{
    public function getDataFromYahoo()
    {
        $name = (string) $_POST['shortname'];
        $guzzleClient = new Client();
        $client = ApiClientFactory::createApiClient($guzzleClient);
       return $quote = $client->getQuote("$name");
    }
}
