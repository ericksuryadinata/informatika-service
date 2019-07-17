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
                'imei' => '111',
            ],
            [
                'uuid' => '112',
                'nip' => '20460940401',
                'nama' => 'Geri Kusnanto, S.Kom.,MM.',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. SiwalanKerto Utara II/39 Surabaya ( Nginden Baru VIII/B-20 Perum Dosen Untag)',
                'nomor_telepon' => '08155015181',
                'imei' => '112',
            ],
            [
                'uuid' => '113',
                'nip' => '20450000515',
                'nama' => 'Dr. Ir. Muaffaq Achmad Jani, M.Eng',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Sutorejo Timur 9/19 Surabaya',
                'nomor_telepon' => '0818514175',
                'imei' => '113',
            ],
            [
                'uuid' => '114',
                'nip' => '20460950416',
                'nama' => 'Ery Sadewa Yudha Wrahatnala, S.Kom., MM',
                'jenis_kelamin' => 'L',
                'alamat' => 'Taman Pondok Legi 2 / B - 3 Pepelegi – Waru, Sidoarjo',
                'nomor_telepon' => '081330707097',
                'imei' => '114',
            ],
            [
                'uuid' => '115',
                'nip' => '20460000512',
                'nama' => 'Dr. Fajar Astuti Hermawati, S.Kom., M.Kom',
                'jenis_kelamin' => 'P',
                'alamat' => 'Sukolilo Park Regency K-18 Keputih',
                'nomor_telepon' => '081331853372',
                'imei' => '115',
            ],
            [
                'uuid' => '116',
                'nip' => '20460110602',
                'nama' => 'Supangat, M.Kom.,ITIL., COBIT',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Jagir Sidomukti IV/26 Surabaya',
                'nomor_telepon' => '081803081420',
                'imei' => '116',
            ],
            [
                'uuid' => '117',
                'nip' => '20450920281',
                'nama' => 'Ir. Roenadi Koesdijarto, MM',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Gajah Mada I No 29, Surabaya',
                'nomor_telepon' => '08123201817',
                'imei' => '117'
            ],
            [
                'uuid' => '118',
                'nip' => '20460030555',
                'nama' => 'Muhamad Firdaus, ST., M.Kom',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Ikan Bandeng II, Desa Peranti Sedati, Sidoarjo',
                'nomor_telepon' => '03170547031',
                'imei' => '118'
            ],
            [
                'uuid' => '119',
                'nip' => '20410960490',
                'nama' => 'Mochamad Sidqon, S.Si., M.Si',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Bromo No. 1  Kab. Pasuruan',
                'nomor_telepon' => '085258258199',
                'imei' => '119'
            ],
            [
                'uuid' => '120',
                'nip' => '20460950407',
                'nama' => 'Ir. Agus Darwanto, MM',
                'jenis_kelamin' => 'L',
                'alamat' => 'Perum.Wikarsa Blok F-36, Mojokerto',
                'nomor_telepon' => '08121713779',
                'imei' => '120'
            ],
            [
                'uuid' => '121',
                'nip' => '20460000513',
                'nama' => 'Anton Breva Yunanda, ST., M.MT.',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Kupang Indah XVII/No.19 Surabaya',
                'nomor_telepon' => '08123565397',
                'imei' => '121'
            ]
        ];
        Schema::enableForeignKeyConstraints();
        Dosen::insert($data);
    }
}
