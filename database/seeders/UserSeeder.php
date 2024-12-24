<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fikri Akbar Pratama',
            'username' => 'fikriarp',
            'email' => 'fikri.akbar1p@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(111227),
            'remember_token' => Str::random(10),
        ]);

        User::factory(5)->create();
    }
}
