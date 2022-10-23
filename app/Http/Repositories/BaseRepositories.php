<?php


namespace App\Repositories;

use App\Models\UserProfiles;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(UserProfiles $model)
    {
      $this->model = $model;
    }
}

