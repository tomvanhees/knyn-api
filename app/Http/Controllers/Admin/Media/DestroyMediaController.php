<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Controller;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;

class DestroyMediaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param MediaRepository $mediaRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|void
     */
    public function __invoke(Request $request,int $id, MediaRepository $mediaRepository)
    {
        $mediaRepository->destroy($id);

        return response(['message' => "success"],200);
    }
}
