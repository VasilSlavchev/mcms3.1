<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'example@example.com')->first();

        if (!$user) {
            User::create([
                'role' => 'admin',
                'name' => 'admin',
                'email' => 'example@example.com',
                'password' => Hash::make('password')
            ]);
        }
    }
}
