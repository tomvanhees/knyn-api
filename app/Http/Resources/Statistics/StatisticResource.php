<?php


namespace App\Http\Resources\Statistics;


use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;

class StatisticResource extends AbstractResource
{

    private $dataCollection = [];


    const COLORS = [
        0  => '#009B77',
        1  => '#DD4124',
        2  => '#D65076',
        3  => '#45B8AC',
        4  => '#EFC050',
        5  => '#5B5EA6',
        6  => '#9B2335',
        7  => '#DFCFBE',
        8  => '#55B4B0',
        9  => '#E15D44',
        10 => '#7FCDCD',
        11 => '#BC243C',
        12 => '#C3447A',
        13 => '#98B4D4',


    ];


    protected function process()
    {
        $this->collection["question"] = $this->data->question->question;
        $this->collection["data"]     = $this->parseData();
    }


    private function parseData()
    : array
    {
        $newData = [];

        $index = 0;
        foreach ($this->data->statistic as $key => $statistic) {

            $this->addLabel($statistic["answer"]);

            $newData['backgroundColor'][] = self::COLORS[$index];
            $newData["data"][]            = $statistic["count"];
            $index++;
        }

        $this->dataCollection["datasets"][] = $newData;

        return $this->dataCollection;
    }


    private function addLabel($label)
    {
        $this->dataCollection["labels"][] = $label;
    }

}