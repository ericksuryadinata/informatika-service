<?php

use Illuminate\Database\Seeder;
use App\Models\Prosedur;

class ProsedurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prosedur::truncate();

        $data = [
            [
                'key' => 'cariProsedurKerjaPraktek',
                'value' =>
                '1. Ambil voucher kerja praktek\r\n
                2. Bayar voucher kerja praktek\r\n
                3. Validasi voucher kerja praktek\r\n
                4. Ambil surat pengantar kerja praktek\r\n
                5. Terima surat balasan kerja praktek\r\n
                6. Login sim-kp
                7. Input judul proposal di menu proposal -> proposal sim-kp\r\n
                8. Upload proposal serta surat balasan dan voucher melalui sim-kp\r\n
                9. Approval pembimbing\r\n
                10. Cetak Lembar Bimbingan KP\r\n
                11. Bimbingan Kerja Praktek\r\n
                12. Sidang Kerja Praktek\r\n
                12. Upload Laporan Kerja Praktek melaui sim-kp\r\n
                13. Cetak buku laporan 2x\r\n
                14. CD + Cover 1x',
            ],
            [
                'key' => 'cariProsedurTA',
                'value' =>
                '1. Ambil voucher kerja praktek\r\n
                2. Bayar voucher kerja praktek\r\n
                3. Validasi voucher kerja praktek\r\n
                4. Ambil surat pengantar kerja praktek\r\n
                5. Terima surat balasan kerja praktek\r\n
                6. Login sim-kp
                7. Input judul proposal di menu proposal -> proposal sim-kp\r\n
                8. Upload proposal serta surat balasan dan voucher melalui sim-kp\r\n
                9. Approval pembimbing\r\n
                10. Cetak Lembar Bimbingan KP\r\n
                11. Bimbingan Kerja Praktek\r\n
                12. Sidang Kerja Praktek\r\n
                12. Upload Laporan Kerja Praktek melaui sim-kp\r\n
                13. Cetak buku laporan 2x\r\n
                14. CD + Cover 1x',
            ],
            [
                'key' => 'cariProsedurSeminarTA',
                'value' =>
                '1. Ambil voucher kerja praktek\r\n
                2. Bayar voucher kerja praktek\r\n
                3. Validasi voucher kerja praktek\r\n
                4. Ambil surat pengantar kerja praktek\r\n
                5. Terima surat balasan kerja praktek\r\n
                6. Login sim-kp
                7. Input judul proposal di menu proposal -> proposal sim-kp\r\n
                8. Upload proposal serta surat balasan dan voucher melalui sim-kp\r\n
                9. Approval pembimbing\r\n
                10. Cetak Lembar Bimbingan KP\r\n
                11. Bimbingan Kerja Praktek\r\n
                12. Sidang Kerja Praktek\r\n
                12. Upload Laporan Kerja Praktek melaui sim-kp\r\n
                13. Cetak buku laporan 2x\r\n
                14. CD + Cover 1x',
            ],
            [
                'key' => 'cariProsedurYudisium',
                'value' =>
                '1. Ambil voucher kerja praktek\r\n
                2. Bayar voucher kerja praktek\r\n
                3. Validasi voucher kerja praktek\r\n
                4. Ambil surat pengantar kerja praktek\r\n
                5. Terima surat balasan kerja praktek\r\n
                6. Login sim-kp
                7. Input judul proposal di menu proposal -> proposal sim-kp\r\n
                8. Upload proposal serta surat balasan dan voucher melalui sim-kp\r\n
                9. Approval pembimbing\r\n
                10. Cetak Lembar Bimbingan KP\r\n
                11. Bimbingan Kerja Praktek\r\n
                12. Sidang Kerja Praktek\r\n
                12. Upload Laporan Kerja Praktek melaui sim-kp\r\n
                13. Cetak buku laporan 2x\r\n
                14. CD + Cover 1x',
            ],
            [
                'key' => 'cariJadwalPendaftaranSeminarTA',
                'value' => 'a'
            ],
            [
                'key' => 'cariJadwalPendaftaranTA',
                'value' => 'b'
            ],
            [
                'key' => 'cariJadwalPendaftaranKerjaPraktek',
                'value' => 'c'
            ],
        ];

        Prosedur::insert($data);
    }
}
