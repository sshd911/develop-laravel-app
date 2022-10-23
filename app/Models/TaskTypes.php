<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTypes extends Model
{
    use HasFactory;

    const TYPES = [
        1 => 'ホームページ関連',
        2 => 'データベース関連',
        // 3 => '',
        // 4 => '',
        // 5 => '',
        // 6 => '',
        // 7 => '',
        // 8 => '',
        // 9 => '',
        // 10 => '',
    ];

    protected $fillable = [
        'type',
    ];
}
