<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telephone',
        'post_code',
        'birthday',
        'gender',
        'memo',
    ];
}