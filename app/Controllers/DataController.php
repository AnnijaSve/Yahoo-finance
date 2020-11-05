<?php
namespace App\Controllers;

use App\Models\Data;
use App\Services\FindDataService;
use App\Services\InsertDataService;
use App\Services\UpdateDataService;
use Carbon\Carbon;


class DataController

{
    public function show()
    {
        return require_once __DIR__ . '/../Views/DataView.php';

    }

    public function showData()
    {

        $dataQuery = (new FindDataService())->find();

        if(Carbon::now()->diffInMinutes($dataQuery['createdAt'])>10){

            (new UpdateDataService())->execute();

            $data = Data::create($dataQuery);

            return require_once __DIR__ . '/../Views/DataView.php';

        }

        if (! $dataQuery){

            (new InsertDataService())->execute();

            $dataQuery = (new FindDataService())->find();

            $data = Data::create($dataQuery);

            return require_once __DIR__ . '/../Views/DataView.php';


        } else {
            $data = Data::create($dataQuery);
        }

        return require_once __DIR__ . '/../Views/DataView.php';


    }
}
