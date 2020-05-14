<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Classes\QrGenerator;
use App\Models\QrCode;

class GenerateAppTokenQR implements ShouldQueue
{
    use Dispatchable,InteractsWithQueue,Queueable,SerializesModels;

    /**
     * @var User
     */
    private User   $user;
    private string $token;

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param string $token
     */
    public function __construct(User $user,string $token)
    {
        //
        $this->user  = $user;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $path = $this->user->id . "/qr/app.png";

        $qrcode = new QrGenerator();
        $qrcode->write('http://app.tomvanhees.be/#/authenticate/' . $this->token);
        $qrcode->save($path);

        QrCode::create([
                           "user_id" => $this->user->id,
                           "name"    => "app",
                           "path"    => $qrcode->getFileLocation()
                       ]);


    }
}
