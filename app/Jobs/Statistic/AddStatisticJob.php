<?php

namespace App\Jobs\Statistic;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Feedback\Question;
use App\Models\Statistic;
use Illuminate\Support\Facades\Log;

class AddStatisticJob implements ShouldQueue
{
    use Dispatchable,InteractsWithQueue,Queueable,SerializesModels;

    private int $user_id;
    /**
     * @var Question
     */
    private Question $question;

    /**
     * Create a new job instance.
     *
     * @param int $user_id
     * @param Question $question
     */
    public function __construct(int $user_id,Question $question)
    {
        $this->user_id  = $user_id;
        $this->question = $question;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $statistic = new Statistic();

        $statistic->user_id     = $this->user_id;
        $statistic->question_id = $this->question->id;
        $statistic->statistic   = $this->processQuestion();

        $statistic->save();
    }


    private function processQuestion()
    : array
    {
        $statistic = [];

        foreach ($this->question->answers as $answer) {

            $statistic[$answer["id"]] = [
                "answer" => $answer["answer"],
                "count"  => 1
            ];
        }


        return $statistic;
    }
}
