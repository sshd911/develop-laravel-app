<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use App\Services\UserProfilesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfilesController extends Controller
{
    public $userProfilesService;

    public function __construct(UserProfilesService $userProfilesService)
    {
        $this->userProfilesService = $userProfilesService;
    }

    public function register($attributes)
    {
        $this->UserProfilesService->register($attributes);
    }

    public function index()
    {
        $attributes = UserProfile::where('user_id', '=', Auth::id())->get();
        return view('user.userProfiles.index', compact('attributes'));
    }
}
