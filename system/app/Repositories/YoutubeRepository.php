<?php

namespace App\Repositories;

use App\Youtube;
use App\Repositories\Repository;

class YoutubeRepository extends Repository{

    public function __construct(Youtube $youtube)
    {
        $this->model = $youtube;
        
    }

}

?>