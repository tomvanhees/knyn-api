<?php

namespace App\Http\Controllers\Admin\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Resources\Feedback\FeedbackQuestionResource;
use App\Models\Feedback\Answer;
use App\Repositories\QuestionsAPIRepository;
use App\Traits\UsesResource;
use Illuminate\Http\Request;
use App\Models\Feedback\Question;
use Illuminate\Support\Facades\Auth;
use App\Jobs\Statistic\AddStatisticJob;
use Illuminate\Support\Facades\Log;

class QuestionsController extends Controller
{
    use UsesResource;

    /**
     * Display a listing of the resource.
     *
     * @param QuestionsAPIRepository $APIRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(QuestionsAPIRepository $APIRepository)
    {
        $questions = $APIRepository->get();
        return response()->json(['content' => $this->mapToResource($questions)], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content.question' => 'required',
            'content.answers' => 'required'
        ]);

        $question = Question::create([
            'question' => $validated['content']['question'],
        ]);

        foreach ($validated['content']['answers'] as $content_answer) {
            Answer::create([
                'question_id' => $question->id,
                'answer' => $content_answer['answer']
            ]);
        }


//        AddStatisticJob::dispatch(Auth::id(), $question);

        return response()->json([], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->is_active = !$question->is_active;
        $question->save();

        return response()->json([], 204);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return response()->json([], 204);


    }

    protected function getResource($resource)
    {
        return new FeedbackQuestionResource($resource);
    }
}
