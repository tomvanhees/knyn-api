<?php


namespace App\Repositories;


use App\Models\Feedback\Question;

class QuestionsAPIRepository implements APIRepositoryContract
{

    public function get()
    {
        return Question::with('answers')->get();
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
