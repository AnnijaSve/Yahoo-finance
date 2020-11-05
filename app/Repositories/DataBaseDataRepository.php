<?php
namespace App\Repositories;

use App\Models\Data;
use Carbon\Carbon;

class DataBaseDataRepository

{

    public function findByName()
    {

        return $dataQuery = query()
            ->select('*')
            ->from('data')
            ->where('shortName = :shortName')
            ->setParameter('shortName', (string) $_POST['shortname'])
            ->execute()
            ->fetchAssociative();


    }

    public function update($quote)
    {
        query()
            ->update('data')
            ->set('openData', ':openData')
            ->set('previousClose', ':previousClose')
            ->set('createdAt', ':createdAt')
            ->setParameters([
                'openData' => $quote->getRegularMarketOpen(),
                'previousClose' => $quote->getRegularMarketPreviousClose(),
                'createdAt' => Carbon::now()
            ])
            ->where('shortName = :shortName')
            ->setParameter('shortName', (string) $_POST['shortname'])
            ->execute();
    }

    public function insert($quote)
    {
        query()
            ->insert('data')
            ->values([
                'longName' => ':longName',
                'shortName' => ':shortName',
                'openData' => ':openData',
                'previousClose' => ':previousClose',

            ])
            ->setParameters([
                'longName' =>  $quote->getLongName(),
                'shortName' => $quote->getSymbol(),
                'openData' =>   $quote->getRegularMarketOpen(),
                'previousClose' => $quote->getRegularMarketPreviousClose(),
            ])
            ->execute();
    }

}
