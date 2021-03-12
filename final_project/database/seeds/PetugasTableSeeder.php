<?php

use Illuminate\Database\Seeder;
use App\User;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petugas = 
            [
                'name' => 'petugas',                
                'email' => 'petugas@gmail.com' ,
                'password' => bcrypt('12341234'),
                'role' => 'petugas'
            ];
        
        User::insert($petugas);
                  
    }
}
