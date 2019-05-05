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
                'anggota_penguji_1' => 'Nuril Esti K.',
                'anggota_penguji_2' => 'Puteri Noraisya P.',
                'ruang' => 'Q-301',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ]
        ];

        InformasiSeminarTa::insert($data);
    }
}
