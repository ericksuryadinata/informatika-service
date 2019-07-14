<?php

use Illuminate\Database\Seeder;
use App\Models\PraktikumLaboratorium;

class PraktikumLaboratoriumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        PraktikumLaboratorium::truncate();
        $data = [
            [
                'kode' => 4611,
                'nama' => 'Dasar Komputer dan Internet',
                'laboratorium_kode' => 461
            ],
            [
                'kode' => 4612,
                'nama' => 'Pengembangan Teknologi Website',
                'laboratorium_kode' => 461
            ],
            [
                'kode' => 4613,
                'nama' => 'Pengembangan Teknologi Website ~VIP~',
                'laboratorium_kode' => 461
            ],
            [
                'kode' => 4614,
                'nama' => 'Pengembangan Teknologi Mobile',
                'laboratorium_kode' => 461
            ],
            [
                'kode' => 4615,
                'nama' => 'Pengembangan Teknologi Mobile ~VIP~',
                'laboratorium_kode' => 461
            ],
            [
                'kode' => 4621,
                'nama' => 'Pemrograman Dasar',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4622,
                'nama' => 'Komputer Aplikasi',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4623,
                'nama' => 'Pemrograman Lanjut',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4624,
                'nama' => 'Pemrograman Web',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4625,
                'nama' => 'Sistem Operasi',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4626,
                'nama' => 'Manajemen Data dan Informasi',
                'laboratorium_kode' => 462
            ],
            [
                'kode' => 4631,
                'nama' => 'Manajemen Jaringan Komputer',
                'laboratorium_kode' => 463
            ],
            [
                'kode' => 4632,
                'nama' => 'Sistem Jaringan Komputer',
                'laboratorium_kode' => 463
            ],
            [
                'kode' => 4641,
                'nama' => 'Rangkaian Logika',
                'laboratorium_kode' => 464
            ],
            [
                'kode' => 4642,
                'nama' => 'Mikroprosessor',
                'laboratorium_kode' => 464
            ],
            [
                'kode' => '464SD',
                'nama' => 'Sistem Digital',
                'laboratorium_kode' => 464
            ],
            [
                'kode' => 4651,
                'nama' => 'Komputer Grafik dan Visualisasi Data ',
                'laboratorium_kode' => 465
            ],
            [
                'kode' => 4652,
                'nama' => 'Pengolahan Citra Digital             ',
                'laboratorium_kode' => 465
            ]
        ];
        Schema::enableForeignKeyConstraints();
        PraktikumLaboratorium::insert($data);
    }
}
