<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriTableSeeder extends Seeder
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
                'id' => '1',
                'nama' => 'Novel',
             ],
             [
                 'id' => '2',
                 'nama' => 'Komik',
             ],
             [
                'id' => '3',
                'nama' => 'Ensiklopedi',
             ],
             [
                 'id' => '4',
                 'nama' => 'Nomik',
             ],
             [
                'id' => '5',
                'nama' => 'Antologi',
             ],
             [
                 'id' => '6',
                 'nama' => 'Dongeng',
             ],
             [
                'id' => '7',
                'nama' => 'Biografi',
             ],
             [
                 'id' => '8',
                 'nama' => 'Karya ilmiah',
             ],
             [
                'id' => '9',
                'nama' => 'Panduan',
             ],
             [
                 'id' => '10',
                 'nama' => 'Atlas',
             ],
             [
                'id' => '11',
                'nama' => 'Ilmiah',
             ],
             [
                 'id' => '12',
                 'nama' => 'Cergam',
             ]
        ];
        Kategori::insert($data);
    }
}
