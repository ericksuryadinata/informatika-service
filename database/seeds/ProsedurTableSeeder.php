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
                'value' => '
                1. Ambil voucher kerja praktek\r\n
                2. Bayar voucher kerja praktek\r\n
                3. Validasi voucher kerja praktek\r\n
                4. Ambil surat pengantar kerja praktek\r\n
                5. Terima surat balasan kerja praktek\r\n
                6. Login sim-kp\r\n
                7. Input judul proposal di menu proposal -> proposal sim-kp\r\n
                8. Upload proposal serta surat balasan dan voucher melalui sim-kp\r\n
                9. Approval pembimbing\r\n
                10. Cetak Lembar Bimbingan KP\r\n
                11. Bimbingan Kerja Praktek\r\n
                12. Sidang Kerja Praktek\r\n
                13. Upload Laporan Kerja Praktek melaui sim-kp\r\n
                14. Cetak buku laporan 2x\r\n
                15. CD + Cover 1x',
            ],
            [
                'key' => 'cariProsedurTA',
                'value' =>
                'Syarat *ADMINISTRASI* yang harus dipenuhi. Checklistnya : \r\n
                1. Telah mengambil *"Tugas Akhir"* di KRS\r\n
                2. Telah mengambil dan validasi *Voucher TA tahap 1* di semester ini\r\n
                3. Telah memiliki jumlah *total sks lulus* adalah *138 sks* - ATAU 138 sks dikurangi jumlah sks mata kuliah yang masih ditempuh\r\n
                4. Telah memiliki *Nilai Praktikum sebanyak 10*, dengan *nilai masing-masing minimal C*\r\n
                5. Telah memiliki *Nilai Mata Kuliah:* Agama, Pend. Pancasila atau Kewarganegaraan, KKN, Kerja Praktek dengan nilai minimal C\r\n
                6. Tidak memiliki *jumlah lebih dari 14 sks* untuk *nilai mata kuliah yang mendapat nilai D*\r\n\r\n
                Syarat *PENDAFTARAN SIDANG TA*\r\n
                1. Berita Acara Seminar TA\r\n
                2. Lembar Bimbingan TA yang sudah di-ACC Maju Sidang TA oleh Dosen Pembimbing & Co-Pembimbing (jika ada)\r\n
                3. Voucher TA Tahap 2 tervalidasi di loket Fakultas (biaya Rp500.000)\r\n
                4. Mendaftarkan Diri secara Online di halaman PENDAFTARAN SIDANG TUGAS AKHIR\r\n',
            ],
            [
                'key' => 'cariProsedurSeminarTA',
                'value' =>
                '1. Bimbingan Pra Seminar TA Minimal 5x\r\n
                2. Minta ACC Maju Seminar TA\r\n
                3. Mengambil & Validasi Voucher Seminar TA
                4. Mengisi data dan upload data di form pendaftaran Seminar TA
                5. Menunggu Pengumuman Seminar TA',
            ],
            [
                'key' => 'cariProsedurYudisium',
                'value' =>
                'Untuk mendaftar Yudisium, syarat yang paling penting adalah:\r\n
                1) Revisi Sidang Tugas Akhir yang sudah di ACC Pembimbing & para Penguji di Form Yudisium\r\n
                2) Nilai Mata Kuliah dan Praktikum sudah beres semua (sesuai syarat Sidang TA)\r\n
                3) Meminta ACC Dosen Wali di form Yudisium terkait nilai yang sudah beres\r\n
                3) Sudah memiliki bukti pengecekan Turnitin dari Jurnal Tugas Akhir maksimal 40%*\r\n
                4) Mengambil dan validasi Voucer Paket Yudisium (biaya Rp675.000) yang berisi pembayaran:\r\n
                    a) Biaya proses Yudisium\r\n
                    b) Biaya pengurusan Ijazah & Transkrip resmi\r\n
                    c) Penggelaran fakultas\r\n
                    d) Pengembangan fakultas\r\n
                    e) Pengembangan prodi\r\n',
            ],
            [
                'key' => 'cariJadwalPendaftaranSeminarTA',
                'value' => 'Pendaftaran Seminar TA Periode 1 : 8 - 19 April 2019\r\n
                Pendaftaran Seminar TA Periode 2 : 24 Juni - 5 Juli 2019\r\n\r\n
                Seminar TA Periode 1 :  23 - 25 April 19\r\n
                Seminar TA Periode 2 : 23 - 25 Juli 2019'
            ],
            [
                'key' => 'cariJadwalPendaftaranUjianTA',
                'value' => 'Pendaftaran Sidang TA Periode 1 : 8 - 19 April 2019\r\n
                Pendaftaran Sidang TA Periode 2 : 24 Juni - 5 Juli\r\n
                Sidang TA Periode 1 :  22 April 2019
                Sidang TA Periode 2 : 16 - 18 Juli 2019'
            ],
            [
                'key' => 'cariJadwalPendaftaranKerjaPraktek',
                'value' => 'Pendaftaran Kerja Praktek Dilaksanakan pada saat pengambilan KRS'
            ],
        ];

        Prosedur::insert($data);
    }
}
