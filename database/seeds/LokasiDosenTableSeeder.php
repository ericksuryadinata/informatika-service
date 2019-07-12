<?php

use Illuminate\Database\Seeder;
use App\Models\LokasiDosen;

class LokasiDosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        LokasiDosen::truncate();
        $data = [
            [
                'nip' => '20460960502'
            ]
        ];
        Schema::enableForeignKeyConstraints();
        LokasiDosen::insert($data);
    }
}
