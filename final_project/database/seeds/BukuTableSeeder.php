<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create();
            foreach(range(1,20) as $i){
                DB::table('bukus')->insert([
                    'judul' => $faker->text($maxNbChars = 20) ,
                    'deskripsi' => $faker->text($maxNbChars = 200),
                    'penulis' =>$faker->name,
                    'tahun' => $faker->year($max = 'now') ,
                    'sampul' => 'cover.jpg',
                    'file' => 'sample.pdf',
                    'kategori_id' => $faker->numberBetween($min = 1, $max = 12),
                    'penerbit_id' => $faker->numberBetween($min = 1, $max = 8)
                    
                ]);
            }
        }
    }
}
