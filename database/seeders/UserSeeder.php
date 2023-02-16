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
        User::truncate();

        $users = [
            ['name' => 'administrator',
            'email' => '',
            'password' => '$2y$10$Y.2YaXA/G2O3y9vu.9PJjel4vr6gkrw02700B6xQ603a4ZJmNp/gG']
        ];

        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password']
            ]);
        }
    }
}
