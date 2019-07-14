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
            ],
            [
                'nip' => '20460940401'
            ],
            [
                'nip' => '20450000515'
            ],
            [
                'nip' => '20460950416'
            ],
            [
                'nip' => '20460000512'
            ],
            [
                'nip' => '20460110602'
            ],
            [
                'nip' => '20450920281'
            ],
            [
                'nip' => '20460030555',
            ],
            [
                'nip' => '20410960490'
            ],
            [
                'nip' => '20460950407'
            ],
            [
                'nip' => '20460000513'
            ]
        ];
        Schema::enableForeignKeyConstraints();
        LokasiDosen::insert($data);
    }
}
