<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'PUBLIKASI : DISPLAY, ADVETORIAL, E-KORAN',
                'deskripsi' => 'deskripsi',
                
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'WEB DEVELOPMENT',
                'deskripsi' => 'deskripsi',
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'PR CONSULTANT',
                'deskripsi' => 'deskripsi',
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'INFLUENCERS ACTIVATION MANAGEMENT',
                'deskripsi' => 'deskripsi',
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'CREATIVE VIDEO AND BROADCASTING',
                'deskripsi' => 'deskripsi',
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'CONTENT MANAGEMENT SYSTEM',
                'deskripsi' => 'deskripsi',
            ]
        );
        DB::table('product')->insert(
            [
                'gambar'=>'gambar',
                'nama_product' => 'EVENT MANAGEMENT',
                'deskripsi' => 'deskripsi',
            ]
        );
        
        
    }
}
