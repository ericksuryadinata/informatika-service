<?php

use Illuminate\Database\Seeder;
use App\Models\KelasLaboratorium;

class KelasLaboratoriumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        KelasLaboratorium::truncate();
        $data = [
            [
                'id' => 710,
                "praktikum_laboratorium_kode" => 4621,
                "nip" => 20460150653,
                "asisten_laboratorium_id" => 17,
                "nama" => "D3.A",
                "tahun_ajaran" => 2018,
                "semester" => 1,
                "jam" => "20-21",
                "hari_kode" => 3
            ],
            [
                'id' => 493,
                "praktikum_laboratorium_kode" => 4621,
                "nip" => 20460160708,
                "asisten_laboratorium_id" => 30,
                "nama" => "D4.A",
                "tahun_ajaran" => "2017",
                "semester" => 1,
                "jam" => "20-21",
                "hari_kode" => 3
            ],
            ['id' => 547,    "praktikum_laboratorium_kode" => '4621',    'nip' => 20460150665,    "asisten_laboratorium_id" => 31,    "nama" => "J9",        'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 6],
            ['id' => 600,    "praktikum_laboratorium_kode" => '4623',    'nip' => 20460950416,    "asisten_laboratorium_id" => 31,    "nama" => "J9.A",        'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 6],
            ['id' => 628,    "praktikum_laboratorium_kode" => '464SD', 'nip' => 20460150665,    "asisten_laboratorium_id" => 13,    "nama" => "F7",        'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "20-21",    'hari_kode' => 6],
            ['id' => 653,    "praktikum_laboratorium_kode" => '4632',    'nip' => 20450000515,    "asisten_laboratorium_id" => 27,    "nama" => "SC",        'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "22-23",    'hari_kode' => 5],
            ['id' => 701,    "praktikum_laboratorium_kode" => '4626',    'nip' => 20460150665,    "asisten_laboratorium_id" => 16,    "nama" => "M2",        'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "22-23",    'hari_kode' => 2],
            ['id' => 770,    "praktikum_laboratorium_kode" => '4612',    'nip' => 20460150665,    "asisten_laboratorium_id" => 10,    "nama" => "E1",        'tahun_ajaran' => 2019,    "semester" => 2,    "jam" => "20-21",    'hari_kode' => 5],
            ['id' => "712", "praktikum_laboratorium_kode" => "4621", 'nip' => 20460160708,    "asisten_laboratorium_id" => 17,    "nama" => "D5.A", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "25-26",    'hari_kode' => 3],
            ['id' => "499", "praktikum_laboratorium_kode" => "4621", 'nip' => 20450920281,    "asisten_laboratorium_id" => 30,    "nama" => "D7.B", 'tahun_ajaran' => 2017,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 5],
            ['id' => "582", "praktikum_laboratorium_kode" => "4623", 'nip' => 20460960502,    "asisten_laboratorium_id" => 31,    "nama" => "J3.B", 'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "20-21",    'hari_kode' => 2],
            ['id' => "618", "praktikum_laboratorium_kode" => "464SD", 'nip' => 20410960490,    "asisten_laboratorium_id" => 13,    "nama" => "E7", 'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 5],
            ['id' => "643", "praktikum_laboratorium_kode" => "4632", 'nip' => 20450000515,    "asisten_laboratorium_id" => 27,    "nama" => "S3", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "25-26",    'hari_kode' => 1],
            ['id' => "745", "praktikum_laboratorium_kode" => "4626", 'nip' => 20460960502,    "asisten_laboratorium_id" => 15,    "nama" => "M3.A", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 4],
            ['id' => "768", "praktikum_laboratorium_kode" => "4612", 'nip' => 20460150665,    "asisten_laboratorium_id" => 10,    "nama" => "D2", 'tahun_ajaran' => 2019,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 4],

            ['id' => "286", "praktikum_laboratorium_kode" => "4611", 'nip' => 20460150648,    "asisten_laboratorium_id" => 23,    "nama" => "D5-1", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 5],
            ['id' => "291", "praktikum_laboratorium_kode" => "4621", 'nip' => 20460160719,    "asisten_laboratorium_id" => 19,    "nama" => "D2", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "14-15",    'hari_kode' => 7],

            ['id' => "393", "praktikum_laboratorium_kode" => "4623", 'nip' => 20460960502,    "asisten_laboratorium_id" => 16,    "nama" => "J7.B", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "27-28",    'hari_kode' => 6],
            ['id' => "446", "praktikum_laboratorium_kode" => "464SD", 'nip' => 20460150665,    "asisten_laboratorium_id" => 13,    "nama" => "F9", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "21-22",    'hari_kode' => 6],
            ['id' => "469", "praktikum_laboratorium_kode" => "4632", 'nip' => 20460150666,    "asisten_laboratorium_id" => 26,    "nama" => "S9", 'tahun_ajaran' => 2017,    "semester" => 1,    "jam" => "25-26",    'hari_kode' => 2],
            ['id' => "570", "praktikum_laboratorium_kode" => "4612", 'nip' => 20460150665,    "asisten_laboratorium_id" => 28,    "nama" => "F2", 'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "15-16",    'hari_kode' => 6],
            ['id' => "728", "praktikum_laboratorium_kode" => "4614", 'nip' => 20460150665,    "asisten_laboratorium_id" => 10,    "nama" => "E1", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 5],
            // ['id' => "286", "praktikum_laboratorium_kode" => "4611", 'nip' => 20460150648,    "asisten_laboratorium_id" => 23,    "nama" => "D5-1", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 4],
            // ['id' => "291", "praktikum_laboratorium_kode" => "4621", 'nip' => 20460160719,    "asisten_laboratorium_id" => 19,    "nama" => "D2", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "14-15",    'hari_kode' => 7],
            // ['id' => "469", "praktikum_laboratorium_kode" => "4632", 'nip' => 20460150666,    "asisten_laboratorium_id" => 26,    "nama" => "S9", 'tahun_ajaran' => 2017,    "semester" => 1,    "jam" => "25-26",    'hari_kode' => 2],
            ['id' => "382", "praktikum_laboratorium_kode" => "4623", 'nip' => 20460160719,    "asisten_laboratorium_id" => 16,    "nama" => "J2.A", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 3],
            ['id' => "448", "praktikum_laboratorium_kode" => "464SD", 'nip' => 20460150665,    "asisten_laboratorium_id" => 13,    "nama" => "FB", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "23-24",    'hari_kode' => 5],
            ['id' => "563", "praktikum_laboratorium_kode" => "4612", 'nip' => 20460150665,    "asisten_laboratorium_id" => 29,    "nama" => "D3", 'tahun_ajaran' => 2017,    "semester" => 2,    "jam" => "25-26",    'hari_kode' => 4],
            ['id' => "674", "praktikum_laboratorium_kode" => "4651", 'nip' => 20460170736,    "asisten_laboratorium_id" => 33,    "nama" => "D2", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "23-24",    'hari_kode' => 4],
            ['id' => "725", "praktikum_laboratorium_kode" => "4614", 'nip' => 20460150665,    "asisten_laboratorium_id" => 8,  "nama" => "D2", 'tahun_ajaran' => 2018,    "semester" => 1,    "jam" => "11-12",    'hari_kode' => 1],
            ['id' => "61", "praktikum_laboratorium_kode" => "4621", 'nip' => 20460950416,    "asisten_laboratorium_id" => 19,    "nama" => "D4", 'tahun_ajaran' => 2015,    "semester" => 1,    "jam" => "18-19",    'hari_kode' => 7],
            ['id' => "130", "praktikum_laboratorium_kode" => "4611", 'nip' => 20460150654,    "asisten_laboratorium_id" => 23,    "nama" => "E5-2", 'tahun_ajaran' => 2015,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 5],
            ['id' => "168", "praktikum_laboratorium_kode" => "4623", 'nip' => 20460950407,    "asisten_laboratorium_id" => 16,    "nama" => "J3", 'tahun_ajaran' => 2015,    "semester" => 2,    "jam" => "16-17",    'hari_kode' => 6],
            ['id' => "201", "praktikum_laboratorium_kode" => "4641", 'nip' => 20460150665,  "asisten_laboratorium_id" => 13, "nama" => "D7", 'tahun_ajaran' => 2015,    "semester" => 2,    "jam" => "22-23",    'hari_kode' => 4],
            ['id' => "302", "praktikum_laboratorium_kode" => "4624", 'nip' => 20460950407,    "asisten_laboratorium_id" => 16,    "nama" => "W1", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "20-21",    'hari_kode' => 2],
            ['id' => "312", "praktikum_laboratorium_kode" => "4625", 'nip' => 20460940401,    "asisten_laboratorium_id" => 16,    "nama" => "S3", 'tahun_ajaran' => 2016,    "semester" => 1,    "jam" => "16-17",    'hari_kode' => 6],
            ['id' => "367", "praktikum_laboratorium_kode" => "4631", 'nip' => 20460150666,    "asisten_laboratorium_id" => 24,    "nama" => "B3", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "21-22",    'hari_kode' => 2],
            ['id' => "424", "praktikum_laboratorium_kode" => "4642", 'nip' => 20460150665,    "asisten_laboratorium_id" => 13,    "nama" => "C6", 'tahun_ajaran' => 2016,    "semester" => 2,    "jam" => "21-22",    'hari_kode' => 3],

        ];
        Schema::enableForeignKeyConstraints();
        KelasLaboratorium::insert($data);
    }
}
