<?php


namespace App\Repositories;


use App\Models\Product\ProductBrand;

class BrandAPIRepository implements APIRepositoryContract
{

    public function get()
    {
        return ProductBrand::get();
    }

    public function find(int $id)
    {
        return ProductBrand::find($id);
    }

    public function create(array $data)
    {
        $brand = new ProductBrand();
        $brand = $this->save($brand, $data);
        return $brand;
    }

    public function update(array $data, $id)
    {
        $brand = $this->find($id);
        $this->save($brand, $data);
    }

    public function delete(int $id)
    {
        $brand = $this->find($id);
        $brand->delete();
    }

    private function save(ProductBrand $brand, array $data)
    {
        $data = $data['content'];
        $brand->name = $data['name'];
        $brand->save();

        return $brand;
    }

}
