<?php


namespace App\Http\Resources\Feedback;


use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;

class AnswerResource extends AbstractResource
{

    protected function process()
    {
        $this->collection['id'] = $this->data->id;
        $this->collection['answer'] = $this->data->answer;
    }

}
