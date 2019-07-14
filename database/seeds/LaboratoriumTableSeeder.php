<?php

use Illuminate\Database\Seeder;
use App\Models\Laboratorium;

class LaboratoriumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Laboratorium::truncate();
        $data = [
            [
                'kode' => 461,
                'nama' => 'Dasar Komputer dan Internet'
            ],
            [
                'kode' => 462,
                'nama' => 'Komputasi'
            ],
            [
                'kode' => 463,
                'nama' => 'Jaringan Komputer'
            ],
            [
                'kode' => 464,
                'nama' => 'Rangkaian Logika dan Mikroprosesor'
            ],
            [
                'kode' => 465,
                'nama' => 'Pengolahan Citra'
            ]
        ];
        Schema::enableForeignKeyConstraints();
        Laboratorium::insert($data);
    }
}
