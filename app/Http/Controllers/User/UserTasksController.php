<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserTasks;
use App\Services\UserTasksService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTasksController extends Controller
{
    public $userTasksSercice;

    public function __construct(UserTasksService $userTasksSercice)
    {
        $this->userTasksSercice = $userTasksSercice;
    }

    public function index()
    {
        $attributes = $this->userTasksSercice->getUserTasks(Auth::id());
        return view('user.userTasks.index', compact('attributes'));
    }
}
