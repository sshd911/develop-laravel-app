<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserTask;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserTaskService
{
  public $userTask;

  public function __construct(UserTask $userTask)
  {
    $this->userTask = $userTask;
  }

  public function getUserTasks($userId)
  {
    $userProfiles = UserProfile::where('user_id', $userId)->first();
    $query = $this->userTask->newQuery();
    return $query->where('user_id', '=', $userProfiles->user_id)->get();
  }
}
