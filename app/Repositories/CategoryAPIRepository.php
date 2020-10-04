<?php


namespace App\Repositories;


use App\Models\Product\ProductCategory;

class CategoryAPIRepository implements APIRepositoryContract
{

    public function get()
    {
        return ProductCategory::get();
    }

    public function find(int $id)
    {
        return ProductCategory::find($id);
    }

    public function create(array $data)
    {
        $category = new ProductCategory();
        $category = $this->save($category, $data);
        return $category;
    }

    public function update(array $data, $id)
    {
        $category = $this->find($id);
        $this->save($category, $data);
    }

    public function delete(int $id)
    {
        $category = $this->find($id);
        $category->products()->detach();
        $category->delete();
    }

    private function save(ProductCategory $productCategory, array $data)
    {
        $data = $data['content'];

        $productCategory->name = $data['name'];
        $productCategory->save();

        return $productCategory;
    }
}
