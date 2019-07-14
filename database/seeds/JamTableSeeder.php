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
                'jam_kuliah' => '07.00'
            ],
            [
                'kode' => 12,
                'jam_kuliah' => '07.50'
            ],
            [
                'kode' => 13,
                'jam_kuliah' => '08.40'
            ],
            [
                'kode' => 14,
                'jam_kuliah' => '09.30'
            ],
            [
                'kode' => 15,
                'jam_kuliah' => '10.20'
            ],
            [
                'kode' => 16,
                'jam_kuliah' => '11.10'
            ],
            [
                'kode' => 17,
                'jam_kuliah' => '12.00'
            ],
            [
                'kode' => 18,
                'jam_kuliah' => '12.50'
            ],
            [
                'kode' => 19,
                'jam_kuliah' => '13.40'
            ],
            [
                'kode' => 20,
                'jam_kuliah' => '14.30'
            ],
            [
                'kode' => 21,
                'jam_kuliah' => '15.20'
            ],
            [
                'kode' => 22,
                'jam_kuliah' => '16.10'
            ],
            [
                'kode' => 23,
                'jam_kuliah' => '17.00'
            ],
            [
                'kode' => 24,
                'jam_kuliah' => '17.45'
            ],
            [
                'kode' => 25,
                'jam_kuliah' => '18.30'
            ],
            [
                'kode' => 26,
                'jam_kuliah' => '19.15'
            ],
            [
                'kode' => 27,
                'jam_kuliah' => '20.00'
            ],
            [
                'kode' => 28,
                'jam_kuliah' => '20.45'
            ],

        ];
        Schema::enableForeignKeyConstraints();
        Jam::insert($data);
    }
}
