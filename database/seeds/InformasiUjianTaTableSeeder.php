<?php

use Illuminate\Database\Seeder;
use App\Models\InformasiUjianTa;

class InformasiUjianTaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformasiUjianTa::truncate();
        $data = [
            [
                'nbi' => 1461505276,
                'judul' => 'OPTIMALISASI CHATBOT UNTUK MEDIA KOMUNIKASI INTERAKTIF DI JURUSAN TEKNIK INFORMATIKA UNTAG SURABAYA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Elsen Ronando, S.Si.,M.Si.,M.Sc',
                'anggota_penguji_2' => 'Luvia Friska Narulita, S.ST., M.T',
                'ruang' => 'Q303',
                'tanggal' => '2019-07-24',
                'periode' => 2,
                'tahun' => '2018 / 2019'
            ],
            [
                'nbi' => 1461505308,
                'judul' => 'APLIKASI PENELUSURAN LOKASI DOSEN DI LUAR DAN DI DALAM RUANGAN TERTENTU DENGAN RFID DAN GPS ',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Luvia Friska Narulita, S.ST., M.T',
                'ruang' => 'Q303',
                'tanggal' => '2019-07-24',
                'periode' => 2,
                'tahun' => '2018 / 2019'
            ]
        ];

        InformasiUjianTa::insert($data);
    }
}
