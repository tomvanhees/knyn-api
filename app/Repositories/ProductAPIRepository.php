<?php


namespace App\Repositories;


use App\Models\Product\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductAPIRepository
{

    /**
     * @param $page
     * @param array $brands
     * @param array $categories
     * @return mixed
     */
    public function get($page, $brands = [], $categories = [])
    {
        $query = Product::query();

        if (!empty($brands)) {
            $query = $query->whereIn('brand_id', explode(',', $brands));
        }

        if (!empty($categories)) {
            $query = $query->whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('product_category.id', explode(',', $categories));
            });
        }

        return $query->paginate(9);
    }

    public function find(int $id)
    {
        return Product::find($id);
    }

    public function create(array $data)
    {
        $product = new Product();
        $product = $this->saveProduct($product, $data);

        return $product;
    }

    public function update(array $data, $id)
    {
        $product = $this->find($id);
        $this->saveProduct($product, $data);
    }

    public function delete(int $id)
    {
        $product = $this->find($id);
        $product->clearMediaCollection();
        $product->delete();
    }

    private function saveProduct(Product $product, array $data)
    {
        $data = $data['content'];
        $product->name = $data['name'];
        $product->slug = Str::slug($data['name']);
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->brand_id = $data['brand']['id'];
        $product->save();

        $ids = Arr::pluck($data['categories'], 'id');
        $product->categories()->sync($ids);

        return $product;
    }


}
