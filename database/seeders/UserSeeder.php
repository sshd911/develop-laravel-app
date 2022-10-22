<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'test01@test.com',
            'name' => 'test01',
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'email' => 'test02@test.com',
            'name' => 'test02',
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'email' => 'test03@test.com',
            'name' => 'test03',
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'email' => 'test04@test.com',
            'name' => 'test04',
            'email_verified_at' => now(),
        ]);
    }
}
