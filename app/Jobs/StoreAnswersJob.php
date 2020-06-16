<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Feedback\Answer;
use App\Models\Feedback\Question;
use Illuminate\Support\Facades\Log;

class StoreAnswersJob implements ShouldQueue
{
    use Dispatchable,InteractsWithQueue,Queueable,SerializesModels;

    private int   $user_id;
    private array $answers;

    /**
     * Create a new job instance.
     *
     * @param int $user_id
     * @param array $answers
     */
    public function __construct(int $user_id,array $answers)
    {
        $this->user_id = $user_id;
        $this->answers = $answers;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Answer::create([
                           "user_id" => $this->user_id,
                           "answer"  => $this->prepareAnswers()
                       ]);
    }


    private function prepareAnswers()
    : array
    {
        $answers = array();

        foreach ($this->answers as $question_id => $answer_id) {
            array_push($answers,$this->prepareAnswer($question_id,$answer_id));
        }

        return $answers;
    }

    private function prepareAnswer(int $question_id,string $answer_id)
    : array
    {
        $question = Question::find($question_id);
        $answers  = collect($question->answers);
        $answer   = $answers->firstWhere("id",$answer_id);

        return [
            "question" => $question->question,
            "answer"   => $answer["answer"]
        ];
    }
}
