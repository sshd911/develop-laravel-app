<?php

namespace Database\Seeders;

use App\Models\User;
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
        $userIdList = User::select('id')->pluck('id')->toArray();
        for ($i=1; $i < count($userIdList); $i++) {
            UserProfile::factory()->create([
                        'user_id' => $i,
                        'birthday' => now(),
                    ]);
        }
    }
}
