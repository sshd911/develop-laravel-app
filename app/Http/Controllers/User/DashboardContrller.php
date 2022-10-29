<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardContrller extends Controller
{
    public function index()
    {
        // if (Auth::id()) {
        //     $attributes = User::where('id', '!=', Auth::id())->get();
        // } else {
        //     $attributes = User::select('*')->get();
        // }
        // $attributes = $attributes ? $attributes : null;
        // return view('dashboard', compact('attributes'));
        return view('dashboard');
    }
}
