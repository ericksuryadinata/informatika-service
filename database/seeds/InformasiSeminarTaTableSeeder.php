<?php

use Illuminate\Database\Seeder;
use App\Models\InformasiSeminarTa;

class InformasiSeminarTaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformasiSeminarTa::truncate();
        $data = [
            [
                'nbi' => 1461505097,
                'nama' => 'Rahmad Darmawan',
                'judul' => 'ALAT PEMILAHAN LOGAM DAN NON LOGAM BERBASIS ARDUINO',
                'ketua_penguji' => 'Agung Kridoyono, S.ST.,MT',
                'anggota_penguji_1' => 'Ardy Januantoro, S.Kom., M.MT.',
                'anggota_penguji_2' => 'Puteri Noraisya P., S.ST. ,M.IM. ',
                'ruang' => 'Q-301',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505132,
                'nama' => 'Yogie Alqudy',
                'judul' => 'SISTEM CERDAS PENGAIRAN LAHAN OTOMATIS BERBASIS IOT ',
                'ketua_penguji' => 'Agung Kridoyono, S.ST.,MT',
                'anggota_penguji_1' => 'Ardy Januantoro, S.Kom., M.MT.',
                'anggota_penguji_2' => 'Puteri Noraisya P.',
                'ruang' => 'Q-301',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505276,
                'nama' => 'Erick Surya Dinata',
                'judul' => 'OPTIMALISASI CHATBOT UNTUK MEDIA KOMUNIKASI INTERAKTIF DI JURUSAN TEKNIK INFORMATIKA UNTAG SURABAYA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
        ];

        InformasiSeminarTa::insert($data);
    }
}
