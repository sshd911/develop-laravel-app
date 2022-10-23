<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'details',
        'remarks',
        'deadlinie',
    ];
}
