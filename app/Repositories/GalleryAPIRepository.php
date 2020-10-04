<?php


namespace App\Repositories;


use App\Models\Gallery\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Resources\Gallery\GalleryResource;
use App\Http\Resources\Media\MediaResource;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class GalleryAPIRepository implements APIRepositoryContract
{
    public function get()
    {
        return Gallery::get();
    }

    public function find(int $id)
    {
        return Gallery::find($id);
    }

    public function create(array $data)
    {
        $gallery = new Gallery();
        $gallery = $this->save($gallery, $data);
        return $gallery;
    }

    public function update(array $data, $id)
    {
        $gallery = $this->find($id);
        $this->save($gallery, $data);
    }

    public function delete(int $id)
    {
        $gallery = $this->find($id);
        $gallery->clearMediaCollection();
        $gallery->delete();
    }

    private function save(Gallery $gallery, array $data)
    {
        $data = $data['content'];
        $gallery->name = $data['name'];
        $gallery->slug = Str::slug($data['name']);
        $gallery->save();

        return $gallery;
    }
}
