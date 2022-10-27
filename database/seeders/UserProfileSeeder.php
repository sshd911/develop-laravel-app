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
            'birthday' => now()->format('Y-m-d'),
        ]);
        UserProfile::factory()->create([
            'user_id' => '2',
            'birthday' => now()->format('Y-m-d'),
        ]);
        UserProfile::factory()->create([
            'user_id' => '3',
            'birthday' => now()->format('Y-m-d'),
        ]);
        UserProfile::factory()->create([
            'user_id' => '4',
            'birthday' => now()->format('Y-m-d'),
        ]);
    }
}
