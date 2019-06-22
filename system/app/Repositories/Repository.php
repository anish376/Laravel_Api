<?php

namespace App\Repositories;



  class Repository implements RepositoryInterface{

    protected $model;

    public function getall()
    {
        return $this->model->all();
    }

    public function getbyId($id)
    {
        return $this->model->find($id);
    }

    public function insert(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function deletebyId($id)
    {
        return $this->model->destroy($id);
    }

    public function update(array $attributes, $id)
    {
        $data = $this->model->findOrFail($id);
        $data->update($attributes);
        return $data;
    }
    
  }

?>