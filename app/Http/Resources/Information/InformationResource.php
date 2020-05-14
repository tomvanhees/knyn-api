<?php


namespace App\Http\Resources\Information;


use App\Http\Resources\AbstractResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class InformationResource extends AbstractResource
{

    protected function process()
    {
        $this->collection["qr_codes"]     = $this->getQRCodes();
        $this->collection["hours"]        = $this->getHours();
        $this->collection["social_media"] = $this->getSocialMedia();
    }


    private function getQRCodes()
    {
       $mappedCodes = $this->data->qr_codes->mapWithKeys(function ($code){

           if ($code["path"] === ""){
               return [$code["name"] => ""];
           }

           return [$code["name"] => Storage::disk("public")->url($code["path"])];
        });

        return $mappedCodes->all();


    }

    private function getHours()
    {
        return
            [
                "monday"    => $this->data->hours["monday"] ?? "",
                "tuesday"   => $this->data->hours["tuesday"] ?? "",
                "wednesday" => $this->data->hours["wednesday"] ?? "",
                "thursday"  => $this->data->hours["thursday"] ?? "",
                "friday"    => $this->data->hours["friday"] ?? "",
                "saturday"  => $this->data->hours["saturday"] ?? "",
                "sunday"    => $this->data->hours["sunday"] ?? ""
            ];
    }

    private function getSocialMedia()
    {
        return [
            "facebook"  => $this->data->social_media["facebook"] ?? "",
            "instagram" => $this->data->social_media["instagram"] ?? "",
        ];
    }
}