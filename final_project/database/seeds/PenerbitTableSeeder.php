<?php

use Illuminate\Database\Seeder;
use App\Penerbit;

class PenerbitTableSeeder extends Seeder
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
               'nama' => 'Penerbit Elexmedia Komputindo (Gramedia)',
               'no_telp' => '082312344321',
               'alamat' => 'Jakarta'
            ],
            [
                'id' => '2',
                'nama' => 'Penerbit Qultum Media (Agromedia)',
                'no_telp' => '082312344321',
                'alamat' => 'Jakarta'
            ],
            [
               'id' => '3',
               'nama' => 'Penerbit Mizan',
               'no_telp' => '082312344321',
               'alamat' => 'Jakarta'
            ],
            [
                'id' => '4',
                'nama' => 'Penerbit Media Kita',
                'no_telp' => '082312344321',
                'alamat' => 'Jakarta'
            ],
            [
               'id' => '5',
               'nama' => 'Penerbit Erlangga',
               'no_telp' => '082312344321',
               'alamat' => 'Jakarta'
            ],
            [
                'id' => '6',
                'nama' => 'Penerbit Gagas Media',
                'no_telp' => '082312344321',
                'alamat' => 'Jakarta'
            ],
            [
               'id' => '7',
               'nama' => 'Penerbit Grasindo (Gramedia)',
               'no_telp' => '082312344321',
               'alamat' => 'Jakarta'
            ],
            [
                'id' => '8',
                'nama' => 'Penerbit Buku Kampungku',
                'no_telp' => '082312344321',
                'alamat' => 'Jakarta'
            ]
       ];
       Penerbit::insert($data);
    }
}
