<?php

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Dosen::truncate();
        $data = [
            [
                'uuid' => '111',
                'nip' => '20460960502',
                'nama' => 'Ir. Sugiono, MT',
                'jenis_kelamin' => 'L',
                'alamat' => 'Regency Kuda Dua Blok C-10 Jagir Wonokromo, Surabaya',
                'nomor_telepon' => '0811377133',
                'imei' =>'111',
            ]
        ];
        Schema::enableForeignKeyConstraints();
        Dosen::insert($data);
    }
}
