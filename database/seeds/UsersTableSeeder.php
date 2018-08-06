<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User Player 1',
            'email' => 'l@l.com',
            'password' => '$2y$10$J/Kp5QYu0E2qxi3WQCfXTOaddk/F2K691U2oxUKh0JOVG5TYzZD/C'
        ]);
        $users = factory(\App\Models\User::class, 250)->create();
    }
}
