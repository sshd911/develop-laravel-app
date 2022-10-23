<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfiles;
use App\Models\UserTasks;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserTasksService
{
  public $userTasks;

  public function __construct(UserTasks $userTasks)
  {
    $this->userTasks = $userTasks;  
  }

  public function getUserTasks($userId)
  {
    $userProfiles = UserProfiles::where('user_id', $userId)->first();
    $query = $this->userTasks->newQuery();
    return $query->where('user_id', '=', $userProfiles->user_id)->get();
  }
}
