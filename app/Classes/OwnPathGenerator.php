<?php


namespace App\Classes;


use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Illuminate\Support\Facades\Auth;
use Tenancy\Facades\Tenancy;

class OwnPathGenerator implements PathGenerator
{
    private function getTenantSlug():string{
        return Str::slug((Tenancy::getTenant())->getTenantName());
    }

    /*
     * Get the path for the given media, relative to the root storage path.
     */
    public function getPath(Media $media): string
    {
        return $this->getTenantSlug().'/'.$this->getBasePath($media).'/';
    }

    /*
     * Get the path for conversions of the given media, relative to the root storage path.
     */
    public function getPathForConversions(Media $media): string
    {
        return $this->getTenantSlug().'/'.$this->getBasePath($media).'/conversions/';
    }

    /*
     * Get the path for responsive images of the given media, relative to the root storage path.
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getTenantSlug().'/'.$this->getBasePath($media).'/responsive-images/';
    }

    /*
     * Get a unique base path for the given media.
     */
    protected function getBasePath(Media $media): string
    {
        return $media->getKey();
    }
}
