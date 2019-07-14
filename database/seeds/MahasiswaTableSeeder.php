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
            ]
        ];
        Schema::enableForeignKeyConstraints();
        Mahasiswa::insert($data);
    }
}
