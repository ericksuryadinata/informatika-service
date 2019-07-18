<?php

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Mahasiswa::truncate();
        $data = [
            [
                'nbi' => '1461505276',
                'nama' => 'Erick Surya Dinata',
                'alamat' => 'Jl. Kedondong Kidul 3 / 28',
                'jenis_kelamin' => 'L',
                'kurikulum' => '2015'
            ],
            [
                'nbi' => 1461505308,
                'nama' => 'Danar Krisharmadji',
                'alamat' => 'gresik',
                'jenis_kelamin' => 'L',
                'kurikulum' => '2015'
            ],
            [
                'nbi' => 1461800033,
                "nama" => "Arif Nur Rochman",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461700034,
                "nama" => "Muhammad Dika Abdul Rohman",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461800127,
                "nama" => "Achman Agus Chumaidi",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461700084,
                "nama" => "Kholilul Rohman Kurniawan",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461600076,
                "nama" => "Muhammad Hafid Suharijanto",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461600136,
                "nama" => "Muhammad Eko Hardiyanto",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ],
            [
                'nbi' => 1461505115,
                "nama" => "Anwar",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2015'
            ],
            [
                'nbi' => 1461809999,
                "nama" => "Dummy Mahasiswa",
                "alamat" => 'surabaya',
                'jenis_kelamin' => 'L',
                "kurikulum" => '2016'
            ]

        ];
        Schema::enableForeignKeyConstraints();
        Mahasiswa::insert($data);
    }
}
