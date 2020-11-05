<?php
namespace App\Services;

use App\Repositories\DataBaseDataRepository;
use App\Repositories\YahooDataRepository;

class UpdateDataService
{


    private DataBaseDataRepository $dataBaseDataRepository;
    private YahooDataRepository $yahooDataRepository;

    public function __construct()
    {
        $this->dataBaseDataRepository = new DataBaseDataRepository();
        $this->yahooDataRepository = new YahooDataRepository();
    }

    public function execute()
    {
        $quote = $this->yahooDataRepository->getDataFromYahoo();
        $this->dataBaseDataRepository->update($quote);

    }

}
