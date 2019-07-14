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
                'kode' => 463001,
                'nama' => 'TEKNIK PEMROGRAMAN LANJUT',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463002,
                'nama' => 'TEKNIK KOMPILASI',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463003,
                'nama' => 'TEKNIK DIGITAL',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463004,
                'nama' => 'STRUKTUR DATA',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463005,
                'nama' => 'SISTEM PENGAMAN KOMP.',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463006,
                'nama' => 'SISTEM OPERASI',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463007,
                'nama' => 'SISTEM OPERASI',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463008,
                'nama' => 'SISTEM KEAMANAN KOMPUTER',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463009,
                'nama' => 'SISTEM INFORMASI GEOGRAFIS',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463010,
                'nama' => 'SISTEM DIGITAL',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463011,
                'nama' => 'SISTEM BASIS DATA',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463012,
                'nama' => 'ROBOTIKA',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463013,
                'nama' => 'REKAYASA PERANGKAT LUNAK',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463014,
                'nama' => 'PROBABILITAS DAN STATISTIKA',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463015,
                'nama' => 'PENULISAN ILMIAH',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463016,
                'nama' => 'PENGOLAHAN CITRA DIGITAL',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463017,
                'nama' => 'PENGENALAN POLA KOMP.VISION',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463018,
                'nama' => 'PENGEMBANGAN TEKNOLOGI WEB',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463019,
                'nama' => 'PENGEMBANGAN GAME',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463020,
                'nama' => 'PEMROGRAMAN BERORIANTASI OBYEK',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463021,
                'nama' => 'MOBILE BUSINESS',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463022,
                'nama' => 'MIKRO DAN INTERFACING',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463023,
                'nama' => 'METODE NUMERIK',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463024,
                'nama' => 'MANAJ. JARINGAN KOMPUTER',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463025,
                'nama' => 'MANAJEMEN PROYEK  PERANGKAT LUNAK',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463026,
                'nama' => 'MANAJEMEN PROSES PERANGKAT LUNAK',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463027,
                'nama' => 'MANAJEMEN BISNIS',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463028,
                'nama' => 'LINGK. PEMROG. VISUAL',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463029,
                'nama' => 'KOMPUTASI PARALEL',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463030,
                'nama' => 'KOMPUTASI CERDA BERBASIS VISI',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463031,
                'nama' => 'KEWI RAUSAHAAN',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463032,
                'nama' => 'KECERDASAN BUATAN LANJUT',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463033,
                'nama' => 'KECERDASAN BUATAN',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463034,
                'nama' => 'K3L',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463035,
                'nama' => 'INTERPERSONAL SKILL',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463036,
                'nama' => 'INTERAKSI MANUSIA-KOMPUTER',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463037,
                'nama' => 'ETIKA TEKNOLOGI INFORMASI',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463038,
                'nama' => 'ETIKA PROFESI',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463039,
                'nama' => 'ENTERPRENEURSHIP',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463040,
                'nama' => 'EMBEDED SISTEM',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463041,
                'nama' => 'DECISION SUPPORT SYSTEM',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463042,
                'nama' => 'DATA WAREHOUSE',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463043,
                'nama' => 'DATA MINING',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463044,
                'nama' => 'BAHASA INGGRIS LANJUT',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463045,
                'nama' => 'BAHASA INGGRIS',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463046,
                'nama' => 'AUDIT SISTEM INFORMASI',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463047,
                'nama' => 'ARSITEKTUR DAN ORGANISASI KOMPUTER',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463048,
                'nama' => 'APLIKASI MULTIMEDIA',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463049,
                'nama' => 'ANALISIS ALGORITMA',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463050,
                'nama' => 'ALJABAR LINIER',
                'kurikulum' => '2016'
            ],
            [
                'kode' => 463051,
                'nama' => 'ALJABAR LINIER',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463052,
                'nama' => 'AKUNTANSI KOMPUTER',
                'kurikulum' => '2015'
            ],
            [
                'kode' => 463053,
                'nama' => 'ADM JARINGAN KOMPUTER',
                'kurikulum' => '2015'
            ],

        ];
        Schema::enableForeignKeyConstraints();
        MataKuliah::insert($data);
    }
}
