<?php
namespace App\Services;

use App\Models\Data;
use App\Repositories\DataBaseDataRepository;

class FindDataService
{
    private DataBaseDataRepository $dataBaseDataRepository;

    public function __construct()
    {
        $this->dataBaseDataRepository = new DataBaseDataRepository();
    }

    public function find()
    {
        return $dataQuery = $this->dataBaseDataRepository->findByName();
    }


}