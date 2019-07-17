<?php

use Illuminate\Database\Seeder;
use App\Models\Jam;

class JamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Jam::truncate();
        $data = [
            [
                'kode' => 11,
                'jam_kuliah_masuk' => '07.00',
                'jam_kuliah_keluar' => '07.50'

            ],
            [
                'kode' => 12,
                'jam_kuliah_masuk' => '07.50',
                'jam_kuliah_keluar' => '08.40'
            ],
            [
                'kode' => 13,
                'jam_kuliah_masuk' => '08.40',
                'jam_kuliah_keluar' => '09.30'
            ],
            [
                'kode' => 14,
                'jam_kuliah_masuk' => '09.30',
                'jam_kuliah_keluar' => '10.20'
            ],
            [
                'kode' => 15,
                'jam_kuliah_masuk' => '10.20',
                'jam_kuliah_keluar' => '11.10'
            ],
            [
                'kode' => 16,
                'jam_kuliah_masuk' => '11.10',
                'jam_kuliah_keluar' => '12.00'
            ],
            [
                'kode' => 17,
                'jam_kuliah_masuk' => '12.00',
                'jam_kuliah_keluar' => '12.50'
            ],
            [
                'kode' => 18,
                'jam_kuliah_masuk' => '12.50',
                'jam_kuliah_keluar' => '13.40'
            ],
            [
                'kode' => 19,
                'jam_kuliah_masuk' => '13.40',
                'jam_kuliah_keluar' => '14.30'
            ],
            [
                'kode' => 20,
                'jam_kuliah_masuk' => '14.30',
                'jam_kuliah_keluar' => '15.20'
            ],
            [
                'kode' => 21,
                'jam_kuliah_masuk' => '15.20',
                'jam_kuliah_keluar' => '16.10'
            ],
            [
                'kode' => 22,
                'jam_kuliah_masuk' => '16.10',
                'jam_kuliah_keluar' => '17.00'
            ],
            [
                'kode' => 23,
                'jam_kuliah_masuk' => '17.00',
                'jam_kuliah_keluar' => '17.45'
            ],
            [
                'kode' => 24,
                'jam_kuliah_masuk' => '17.45',
                'jam_kuliah_keluar' => '18.30'
            ],
            [
                'kode' => 25,
                'jam_kuliah_masuk' => '18.30',
                'jam_kuliah_keluar' => '19.15'
            ],
            [
                'kode' => 26,
                'jam_kuliah_masuk' => '19.15',
                'jam_kuliah_keluar' => '20.00'
            ],
            [
                'kode' => 27,
                'jam_kuliah_masuk' => '20.00',
                'jam_kuliah_keluar' => '20.45'
            ],
            [
                'kode' => 28,
                'jam_kuliah_masuk' => '20.45',
                'jam_kuliah_keluar' => '21.30'
            ],

        ];
        Schema::enableForeignKeyConstraints();
        Jam::insert($data);
    }
}
