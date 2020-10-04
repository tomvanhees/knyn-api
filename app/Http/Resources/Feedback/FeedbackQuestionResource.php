<?php


namespace App\Http\Resources\Feedback;


use App\Http\Resources\AbstractResource;
use App\Models\Feedback\Question;

class FeedbackQuestionResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["id"] = $this->data->id;
        $this->collection["question"] = $this->data->question;
        $this->collection['answers'] = $this->answers();
        $this->collection["is_active"] = $this->data->is_active;
    }


    private function answers()
    {
        $answers = [];

        foreach ($this->data->answers as $answer) {
            $answers[] = (new AnswerResource($answer))->toArray();
        }
        return $answers;
    }
}
