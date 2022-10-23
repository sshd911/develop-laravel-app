<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserProfilesService
{
    protected $model;

    public function __construct(UserProfile $model)
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
        return UserProfile::where('id', $userId)->withTrashed()->update($data);
    }
}
