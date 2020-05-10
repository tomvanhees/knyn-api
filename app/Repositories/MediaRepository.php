<?php


namespace App\Repositories;


use App\Models\Product\Product;
use Illuminate\Http\UploadedFile;
use App\Models\Gallery\Gallery;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaRepository
{
    public function addGalleryImage(Gallery $gallery,UploadedFile $file)
    {
        $gallery
            ->addMedia($file)
            ->toMediaCollection();
    }


    public function addProductImage(Product $product,UploadedFile $file)
    {
        $product->addMedia($file)->toMediaCollection();
    }


    public function destroy($id){
        Media::find($id)->delete();
    }
}