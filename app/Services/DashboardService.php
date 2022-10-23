<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfiles;
use App\Models\TaskTypes;
use App\Models\UserTasks;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardService
{
  public $user;
  public $userProfiles;
  public $taskTypes;
  public $userTasks;

  public function __construct(User $user, UserProfiles $userProfiles, TaskTypes $taskTypes, UserTasks $userTasks)
  {
    $this->user = $user;
    $this->userProfiles = $userProfiles;
    $this->taskTypes = $taskTypes;
    $this->userTasks = $userTasks;
  }

  public function getAll()
  {
    $query = $this->user->with('user_profiles');
    $query->leftjoin('', );
    $attributes = '';
    return $attributes;
  }
}
