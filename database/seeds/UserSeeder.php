<?php

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
        $user = new \App\User();
        $user -> name = 'user1';
        $user -> email = 'user@user.com';
        $user -> password =bcrypt('user');
        $user -> save();
    }
}
