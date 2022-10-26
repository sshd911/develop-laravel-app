<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserTasks;
use App\Services\UserTaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTaskController extends Controller
{
    public $userTaskSercice;

    public function __construct(UserTaskService $userTaskSercice)
    {
        $this->userTaskSercice = $userTaskSercice;
    }

    public function index()
    {
        $attributes = $this->userTaskSercice->getUserTasks(Auth::id());
        // dd($attributes);
        return view('user.userTask.index', compact('attributes'));
    }
}
