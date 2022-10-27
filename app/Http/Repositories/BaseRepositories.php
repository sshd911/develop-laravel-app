<?php


namespace App\Repositories;

use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(UserProfile $model)
    {
      $this->model = $model;
    }
}

