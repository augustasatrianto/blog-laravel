<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Augusta Satrianto',
                'username' => 'augusta27',
                'email' => 'augusta@gmail.com',
                'password' => bcrypt("123456")
            ],
            [
                'name' => 'Khaira Nadhifa',
                'username' => 'khaira01',
                'email' => 'khaira@gmail.com',
                'password' => bcrypt("123456")
            ],
            [
                'name' => 'Haidar Amzari Akbar',
                'username' => 'haidar12',
                'email' => 'haidar@gmail.com',
                'password' => bcrypt("123456")
            ]
        ];

        foreach ($users as $user) {
            User::Create($user);
        }
    }
}
