<?php

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        MataKuliah::truncate();
        $data = [
            [
                'kode' => 4616093,
                'nama' => 'TEKNIK PEMROGRAMAN LANJUT',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616253,
                'nama' => 'TEKNIK KOMPILASI',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 462083,
                'nama' => 'TEKNIK DIGITAL',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 462093,
                'nama' => 'STRUKTUR DATA',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463103,
                'nama' => 'SISTEM PENGAMAN KOMP.',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616133,
                'nama' => 'SISTEM OPERASI',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463043,
                'nama' => 'SISTEM OPERASI',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616333,
                'nama' => 'SISTEM KEAMANAN KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463573,
                'nama' => 'SISTEM INFORMASI GEOGRAFIS',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616114,
                'nama' => 'SISTEM DIGITAL',
                'sks' => 4,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 462133,
                'nama' => 'SISTEM BASIS DATA',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463603,
                'nama' => 'ROBOTIKA',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616204,
                'nama' => 'REKAYASA PERANGKAT LUNAK',
                'sks' => 4,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616154,
                'nama' => 'PROBABILITAS DAN STATISTIKA',
                'sks' => 4,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616452,
                'nama' => 'PENULISAN ILMIAH',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463173,
                'nama' => 'PENGOLAHAN CITRA DIGITAL',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463513,
                'nama' => 'PENGENALAN POLA KOMP.VISION',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616233,
                'nama' => 'PENGEMBANGAN TEKNOLOGI WEB',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616353,
                'nama' => 'PENGEMBANGAN GAME',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616103,
                'nama' => 'PEMROGRAMAN BERORIANTASI OBYEK',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463583,
                'nama' => 'MOBILE BUSINESS',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463063,
                'nama' => 'MIKRO DAN INTERFACING',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 462123,
                'nama' => 'METODE NUMERIK',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463153,
                'nama' => 'MANAJ. JARINGAN KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616212,
                'nama' => 'MANAJEMEN PROYEK PERANGKAT LUNAK',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616423,
                'nama' => 'MANAJEMEN PROSES PERANGKAT LUNAK',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 465023,
                'nama' => 'MANAJEMEN BISNIS',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463143,
                'nama' => 'LINGK. PEMROG. VISUAL',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616362,
                'nama' => 'KOMPUTASI PARALEL',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616374,
                'nama' => 'KOMPUTASI CERDAS BERBASIS VISI',
                'sks' => 4,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463183,
                'nama' => 'KEWIRAUSAHAAN',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463503,
                'nama' => 'KECERDASAN BUATAN LANJUT',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616263,
                'nama' => 'KECERDASAN BUATAN',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 405013,
                'nama' => 'K3L',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616142,
                'nama' => 'INTERPERSONAL SKILL',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616223,
                'nama' => 'INTERAKSI MANUSIA - KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616342,
                'nama' => 'ETIKA TEKNOLOGI INFORMASI',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 465013,
                'nama' => 'ETIKA PROFESI',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616383,
                'nama' => 'ENTERPRENEURSHIP',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463523,
                'nama' => 'EMBEDED SISTEM',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463543,
                'nama' => 'DECISION SUPPORT SYSTEM',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463163,
                'nama' => 'DATA WAREHOUSE',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463533,
                'nama' => 'DATA MINING',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 462142,
                'nama' => 'BAHASA INGGRIS LANJUT',
                'sks' => 2,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616083,
                'nama' => 'BAHASA INGGRIS',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463593,
                'nama' => 'AUDIT SISTEM INFORMASI',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616243,
                'nama' => 'ARSITEKTUR DAN ORGANISASI KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463563,
                'nama' => 'APLIKASI MULTIMEDIA',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 4616122,
                'nama' => 'ANALISIS ALGORITMA',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 4616272,
                'nama' => 'ALJABAR LINIER',
                'sks' => 2,
                'kurikulum' => '2016'
            ],
            [
                'kode' => 462062,
                'nama' => 'ALJABAR LINIER',
                'sks' => 2,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463633,
                'nama' => 'AKUNTANSI KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463623,
                'nama' => 'ADM JARINGAN KOMPUTER',
                'sks' => 3,
                'kurikulum' => '2015'
            ],

        ];
        Schema::enableForeignKeyConstraints();
        MataKuliah::insert($data);
    }
}
