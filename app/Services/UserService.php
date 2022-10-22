<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function update(int $userId, array $data)
    {
        return User::where('id', $userId)->withTrashed()->update($data);
    }
}
