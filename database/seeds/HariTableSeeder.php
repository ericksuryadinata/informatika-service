<?php

use Illuminate\Database\Seeder;
use App\Models\Hari;

class HariTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Hari::truncate();
        $data = [
            [
                'kode' => 1,
                'nama' => 'SENIN'
            ],
            [
                'kode' => 2,
                'nama' => 'SELASA'
            ],
            [
                'kode' => 3,
                'nama' => 'RABU'
            ],
            [
                'kode' => 4,
                'nama' => 'KAMIS'
            ],
            [
                'kode' => 5,
                'nama' => 'JUMAT'
            ],
            [
                'kode' => 6,
                'nama' => 'SABTU'
            ],
            [
                'kode' => 7,
                'nama' => 'MINGGU'
            ]

        ];
        Schema::enableForeignKeyConstraints();
        Hari::insert($data);
    }
}
