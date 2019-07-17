<?php

use Illuminate\Database\Seeder;
use App\Models\LokasiDosen;
use Carbon\Carbon;

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
                'nip' => '20460960502',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460940401',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20450000515',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460950416',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460000512',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460110602',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20450920281',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460030555',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20410960490',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460950407',
                'timestamp' => Carbon::now()
            ],
            [
                'nip' => '20460000513',
                'timestamp' => Carbon::now()
            ]
        ];
        Schema::enableForeignKeyConstraints();
        LokasiDosen::insert($data);
    }
}
