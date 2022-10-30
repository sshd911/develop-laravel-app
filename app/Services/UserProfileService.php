<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserProfileService
{
    protected $userProfile;

    public function __construct(UserProfile $userProfile)
    {
      $this->userProfile = $userProfile;
    }

    public function register($attributes)
    {
      $this->userProfile->insert($attributes);
    }

    public function getUserWithUserProfile($userId)
    {
      return User::join('user_profiles', 'users.id', '=', 'user_profiles.user_id')->where('user_id', '=', $userId)->get();
    }
  
    public function update(int $userId, array $data)
    {
        return UserProfile::where('user_id', $userId)->update($data);
    }
}
