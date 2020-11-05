<?php
namespace App\Models;

class Data

{
    private string $longName;
    private string $shortName;
    private float $previousClose;
    private float $open;
    private string $createdAt;

    public function __construct(string $longName, string $shortName, float $previousClose, float $open,string $createdAt)
    {
        $this->longName = $longName;
        $this->shortName = $shortName;
        $this->previousClose = $previousClose;
        $this->open = $open;
        $this->createdAt = $createdAt;
    }

    public function  getLongName(): string
    {
        return $this->longName;
    }

    public function  getShortName(): string
    {
        return $this->shortName;
    }


    public function getPreviousClose(): float
    {
        return $this->previousClose;
    }


    public function getOpen(): float
    {
        return $this->open;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public static function create(array $data): Data
    {
        return new self(
            $data['longName'],
            $data['shortName'],
            $data['openData'],
            $data['previousClose'],
            $data['createdAt']
        );
    }





}
