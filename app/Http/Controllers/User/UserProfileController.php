<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use App\Services\UserProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public $userProfileService;

    public function __construct(UserProfileService $userProfileService)
    {
        $this->userProfileService = $userProfileService;
    }

    public function register($attributes)
    {
        $this->userProfileService->register($attributes);
    }

    public function index()
    {
        $attributes = UserProfile::where('user_id', '=', Auth::id())->get();
        return view('user.userProfile.index', compact('attributes'));
    }
}
