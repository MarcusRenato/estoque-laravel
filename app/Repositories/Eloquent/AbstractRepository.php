<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete();
    }

    public function paginate(int $number = 15)
    {
        return $this->model->paginate($number);
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
