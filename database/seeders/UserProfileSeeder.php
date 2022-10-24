<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::factory()->create([
            'user_id' => '1',
            'telephone' => '000-0000-0000',
            'post_code' => '111-1111',
            'birthday' => now()->format('Y-m-d'),
            'memo' => 'memomemomeo',
            'gender' => 1,
        ]);
        UserProfile::factory()->create([
            'user_id' => '2',
            'telephone' => '000-0000-0000',
            'post_code' => '111-1111',
            'birthday' => now()->format('Y-m-d'),
            'memo' => 'memomemomeo' ,
            'gender' => 1,
        ]);
        UserProfile::factory()->create([
            'user_id' => '3',
            'telephone' => '000-0000-0000',
            'post_code' => '111-1111',
            'birthday' => now()->format('Y-m-d'),
            'memo' => 'memomemomeo' ,
            'gender' => 1,
        ]);
        UserProfile::factory()->create([
            'user_id' => '4',
            'telephone' => '000-0000-0000',
            'post_code' => '111-1111',
            'birthday' => now()->format('Y-m-d'),
            'memo' => 'memomemomeo' ,
            'gender' => 1,
        ]);
    }
}
