<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserProfilesService
{
    protected $model;

    public function __construct(UserProfiles $model)
    {
      $this->model = $model;
    }

    public function register($attributes)
    {
      // $this->model->create([
      //   'email' => $attributes[1]
      // ]);
    }
  
    public function update(int $userId, array $data)
    {
        return UserProfiles::where('id', $userId)->withTrashed()->update($data);
    }
}
