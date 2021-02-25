<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert(
            [
            'gambar'=>'gambar',
            'nama' => 'ACHMAD FAUZI',
            'role' => 'Kepala Biro Times Indonesia Jember',
            ]
        );
        DB::table('team')->insert(
            [
                'gambar'=>'gambar',
                'nama' => 'DODDY BAYU PRASETYO',
                'role' => 'Pimpinan Redaksi',
            ]
        );
        DB::table('team')->insert(
            [
                'gambar'=>'gambar',
                'nama' => 'ADI FAIZIN',
                'role' => 'Jurnalis',
            ],
        );
        DB::table('team')->insert(
            [
                'gambar'=>'gambar',
                'nama' => 'ERFINDA MUSTIKA DEWI',
                'role' => 'Manager Event dan Marketing',
            ]
        );
        DB::table('team')->insert(
            [
                'gambar'=>'gambar',
                'nama' => 'ARIEF FEBRIYANTO',
                'role' => 'Manager Digital Marketing',
            ]
        );   
            
    }
}
