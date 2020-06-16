<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Statistic;
use Illuminate\Support\Facades\Log;

class UpdateStatistics implements ShouldQueue
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
        //
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
        foreach ($this->answers as $key => $value) {
            $statisticModel = Statistic::where([["user_id",$this->user_id],["question_id",$key]])->firstOrFail();

            $statistic = $statisticModel->statistic;
            $statistic[$value]["count"]++;

            $statisticModel->statistic = $statistic;
            $statisticModel->save();
        }
    }
}
