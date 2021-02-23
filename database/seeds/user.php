<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name' => 'admin123',
            'email' => 'admin123@gmail.com',
            'password'=>('$2y$10$srIxfaVGIhzf6Oik/gjU/OCT.jkEGOeA0Fmc8sERb3DOal2Ei3WKW'),
            'sandi'=>('admin123'),
            
            ]
        );

    }
}
