<?php


namespace App\Classes;


use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class QrGenerator
{
    private $writer;

    private $writtenContent;

    private string $path;

    public function __construct($renderstyle = 400)
    {
        $renderer = new ImageRenderer(
            new RendererStyle($renderstyle),
            new ImagickImageBackEnd()
        );

        $this->writer = new Writer($renderer);
    }

    public function write(string $content)
    {
        $this->writtenContent = $this->writer->writeString($content);
    }

    public function save(string $path)
    {
        $this->path = $path;
        Storage::disk("public")->put($this->path,$this->writtenContent);

    }

    public function getFileLocation()
    {
        return $this->path;
    }

    public function remove(string $path)
    {
        Storage::disk("public")->delete($path);
    }


}