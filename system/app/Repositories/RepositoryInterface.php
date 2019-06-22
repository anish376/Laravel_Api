<?php

namespace App\Repositories;

interface RepositoryInterface
{

    public function getall();
    public function getbyId($id);
    public function insert(array $attributes);
    public function update(array $attributes, $id);
    public function deletebyId($id);
}


?>