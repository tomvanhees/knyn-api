<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback\Question;
use Illuminate\Support\Facades\Auth;
use App\Jobs\Statistic\AddStatisticJob;

class QuestionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $questions = Question::fromAuth()->get();

        return response()->json($questions,200);
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
                                            "question" => "required",
                                            "answers"  => "required"
                                        ]);

        $question = Question::create([
                                         "user_id"  => Auth::id(),
                                         "question" => $validated["question"],
                                         "answers"  => $validated["answers"]
                                     ]);

        AddStatisticJob::dispatch(Auth::id(), $question);

        return response()->json([],200);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
