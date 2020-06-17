<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Auth;
use App\Traits\UsesResource;
use App\Http\Resources\Information\InformationResource;
use Illuminate\Support\Facades\Log;
use App\Traits\UsesAuthScope;
use App\Jobs\GenerateFacebookQR;
use App\Jobs\GenerateInstagramQR;
use Illuminate\Support\Facades\Storage;
use App\Classes\SocialMedia\Types\Facebook;
use App\Classes\SocialMedia\Types\Instagram;
use App\Classes\SocialMedia\SocialMedia;

class InformationController extends Controller
{
    use UsesResource;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $information = Information::with("qr_codes")->firstOrCreate([
                                                                        "user_id" => Auth::id()
                                                                    ],[
                                                                        "hours"        => [
                                                                            "monday"    => "",
                                                                            "tuesday"   => "",
                                                                            "wednesday" => "",
                                                                            "thursday"  => "",
                                                                            "friday"    => "",
                                                                            "saturday"  => "",
                                                                            "sunday"    => ""
                                                                        ],
                                                                        "social_media" => [
                                                                            "facebook"  => "",
                                                                            "instagram" => ""
                                                                        ]
                                                                    ]);

        return response()->json($this->toResource($information),200);
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
                                            "content.hours"        => "required",
                                            "content.social_media" => "required"
                                        ]);

        $information = Information::FromAuth()->first();

        $information->update([
                                 "hours"        => $validated['content']["hours"],
                                 "social_media" => $validated['content']["social_media"]
                             ]);


        foreach ($validated['content']["social_media"] as $key => $item) {
            $this->updateSocialMedia($key,$item);
        }

        $information->refresh();
        $information->load("qr_codes");


        return response()->json($this->toResource($information),200);
    }


    private function updateSocialMedia($key,$media = NULL)
    {
        $mediaType = new SocialMedia();
        $mediaType->create(Auth::user(),$key);

        if (!$media){
            $mediaType->remove();
            return;
        }

        $mediaType->write($media);
    }


    protected function getResource($resource)
    {
        return new InformationResource($resource);
    }
}
