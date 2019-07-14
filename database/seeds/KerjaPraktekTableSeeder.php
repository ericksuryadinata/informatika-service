<?php

use Illuminate\Database\Seeder;
use App\Models\KerjaPraktek;

class KerjaPraktekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KerjaPraktek::truncate();
        $data = [
            [
                'nbi' => 1461505276,
                'judul' => 'OPTIMALISASI CHATBOT UNTUK MEDIA KOMUNIKASI INTERAKTIF DI JURUSAN TEKNIK INFORMATIKA UNTAG SURABAYA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505308,
                'judul' => 'APLIKASI PENELUSURAN LOKASI DOSEN DI LUAR DAN DI DALAM RUANGAN TERTENTU DENGAN RFID DAN GPS ',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ]
        ];

        KerjaPraktek::insert($data);
    }
}
