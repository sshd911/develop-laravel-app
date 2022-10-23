<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userRequestController extends Controller
{
    public function index()
    {
        return view('user.userRequest.index');
    }
}
