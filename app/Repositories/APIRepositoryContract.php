<?php


namespace App\Repositories;


use Psr\Http\Message\RequestInterface;

interface APIRepositoryContract
{
    public function get();

    public function find(int $id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete(int $id);
}
