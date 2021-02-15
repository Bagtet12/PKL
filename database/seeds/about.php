<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class about extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        DB::table('about')->insert([
            'judul' => 'TIMES Jember',
            'deskripsi' => 'Menyongsong kebangkitan era informasi online,
            kami TIMES IndonesiaNetwork (TIN) sebagai media online berjejaring 
            terbesar se-Indonesia, hadir menjawabkebutuhan zaman.
            Kami hadir dengan semangat kuat dan mengusung misi 
            BUILDING - INSPIRING - POSITIVE THINKING.
                            
            TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun
            juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap
            menyajikan informasi global melalui TIN, konsep berita regional dan lokal kamihadirkan
            melalui portal independen regional TIMES lain di seluruh provinsi
            menuju era Ketahanan Informasi Nasional',
            'visi'=>'Menjadi Media Online Mainstream Berjejaring No. 1 di Indonesia',
            'misi'=>'
            1. Menggerakkan belanegara bidang informasi lewat media online.
            2. Menciptakan ketahanan informasi di Indonesia.
            3. Membangun dan menegakkan jurnalisme positive
            (building, inspiring, and positive thinking).
            4. Membangun Media Online Mainstream pertama di seluruh daerah se-nusantara.
            5. Menciptakan enterpreneurship media yang tangguh dan berwibawa.
            6. Membangun jejaring informasi yang sehat dan positive.',
            'quotes'=>'Perubahan teknologi informasi dan komunikasi itu terjadi detik per detik.
            Dan, perubahan cepat tersebut menciptakan
            perubahan pola pikir masyarakat. Di sinilah
            Times Indonesia Network mengubah
            Indonesia melalui penguatan ketahanan
            informasi bagi Indonesia.'
        ]);
    }
}
