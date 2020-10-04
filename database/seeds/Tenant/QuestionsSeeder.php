<?php

namespace Database\Seeders\Tenant;

use App\Models\Feedback\Answer;
use App\Models\Feedback\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    private $questions = [
        [
            'question' => 'Hoe tevreden ben je met onze dienstverlening?',
            'answers' => [
                'Heel tevreden',
                'Matig tevreden',
                'Niet tevreden'
            ]
        ],
        [
            'question' => 'Zou je ons aanraden bij vrienden of familie?',
            'answers' => [
                'ja',
                'nee'
            ]
        ]
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->questions as $collection) {
            $question = Question::create([
                'question' => $collection['question']
            ]);

            foreach ($collection['answers'] as $answer) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $answer
                ]);
            }
        }
    }
}
