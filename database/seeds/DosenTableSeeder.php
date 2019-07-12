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
        Dosen::truncate();
        $data = [
            [
                'uuid' => null,
                'nip' => '20460940401',
                'nama' => 'Geri Kusnanto, S.Kom., MM.',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. SiwalanKerto Utara II/39 Surabaya ( Nginden Baru VIII/B-20 Perum Dosen Untag)',
                'nomor_telepon' => '08155015181',
                'imei' => null,
            ]
        ];
    }
}
