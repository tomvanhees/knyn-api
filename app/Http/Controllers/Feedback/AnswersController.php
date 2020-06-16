<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\UpdateStatistics;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback\Answer;
use App\Jobs\StoreAnswersJob;
use App\Traits\UsesResource;
use App\Http\Resources\Feedback\AnswerResource;

class AnswersController extends Controller
{
    use UsesResource;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $answers = Answer::fromAuth()->latest()->get()->groupBy(function ($item) {
            return $item->created_at->format('d-m-Y');
        });

        return response()->json($this->map($answers),200);
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
                                            "answers" => "required"
                                        ]);

        StoreAnswersJob::dispatch(Auth::id(),$validated["answers"]);
        UpdateStatistics::dispatch(Auth::id(),$validated["answers"]);

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

    protected function getResource($resource)
    : AnswerResource
    {
        return new AnswerResource($resource);
    }
}
