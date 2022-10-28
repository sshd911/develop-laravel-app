<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
      $this->user = $user;
    }

    public function register($attributes)
    {
      $this->userProfile->create($attributes);
    }
}