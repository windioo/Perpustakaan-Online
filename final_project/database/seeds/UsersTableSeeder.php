<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Profil;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach(range(1,20) as $i){
                       
        $id = factory('App\User')->create([
            'name' => $faker->name,
            'email' => $faker->email ,
            'password' => bcrypt('12341234'),
            'role' => 'member'
        ])->id;
        $nama = User::where('id', $id)->first()->name;

        $profil = [
            'nama' => $nama,
            'nik' => '12345678910',
            'alamat' => $faker->text($maxNbChars = 20),
            'jenis_kelamin' => $faker->randomElement($array = array ('Laki-laki','Perempuan')),
            'telp' => '082312344321',
            'foto' => 'default.jpg',
            'is_active' => 1,
            'user_id' => $id
        ];
                    
        $profils = Profil::insert($profil);

        }
    }
}
    