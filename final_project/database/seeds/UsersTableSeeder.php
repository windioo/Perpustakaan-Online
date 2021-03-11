<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'member',
                'email' => 'member@gmail.com',
                'password' => bcrypt('12341234'),
                'role' => 'member'
             ],
             [
                 'name' => 'petugas',
                 'email' => 'petugas@gmail.com',
                 'password' => bcrypt('12341234'),
                 'role' => 'petugas'
             ]
        ];
        User::insert($data);
    }
}