<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\TaskType;
use App\Models\UserTask;
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

  public function __construct(User $user, UserProfile $userProfile, TaskType $taskType, UserTask $userTask)
  {
    $this->user = $user;
    $this->userProfiles = $userProfile;
    $this->taskTypes = $taskType;
    $this->userTasks = $userTask;
  }

  public function getAll()
  {
    $query = $this->user->with('user_profiles');
    $query->leftjoin('', );
    $attributes = '';
    return $attributes;
  }
}
