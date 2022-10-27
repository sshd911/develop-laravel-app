<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $userService = $this->userService;
    }

    public function index()
    {
        return view('user.index');
    }
}
