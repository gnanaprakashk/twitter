<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Sample Name',
            'email' => 'test@demo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('demo123'), 
            'remember_token' => 'kasjdkasn',
        ]);
        User::factory()
            ->count(5)
            ->create();
    }
}
