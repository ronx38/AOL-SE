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
    public function run()
    {
        $insertData = [[
            'uuid' => Str::orderedUuid(),
            'name' => 'test1',
            'email' => 'test1@mail.com',
            'username' => 'user1',
            'password' => bcrypt('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]];
        User::insert($insertData);
    }
}
