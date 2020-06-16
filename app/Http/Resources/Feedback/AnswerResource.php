<?php


namespace App\Http\Resources\Feedback;


use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;

class AnswerResource extends AbstractResource
{

    protected function process()
    {

        foreach ($this->data as $data) {
            $this->collection[$data["id"]] =  $this->processAnswers($data["answer"]);
        }
    }


    private function processAnswers(array $answers)
    {
        $formattedAnswers = [];

        foreach ($answers as $answer) {
            $formattedAnswers[] = [
                "question" => $answer["question"],
                "answer"   => $answer["answer"]
            ];
        }


        return $formattedAnswers;
    }
}