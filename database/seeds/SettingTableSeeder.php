<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();
        $data = [
            [
                'kode' => 'cariLokasiDosenGeneral',
                'table' => 'dosen, lokasi_dosen',
                'entity_search' => 'subjekDosen',
                'where' => 'nama, nip',
                'select' => 'nip, *'
            ],
            [
                'kode' => 'cariJadwalDosenGeneral',
                'table' => 'dosen, krs',
                'entity_search' => 'subjekDosen',
                'where' => 'nama, nip',
                'select' => 'nip, *'
            ],
            [
                'kode' => 'cariJadwalDosenGeneralHari',
                'table' => 'dosen, hari, krs',
                'entity_search' => 'subjekDosen, subjekHari',
                'where' => 'nama, nama, [nip, hari_kode]',
                'select' => 'nip, kode, *'
            ],
            [
                'kode' => 'cariNomorDosenGeneral',
                'table' => 'dosen',
                'select' => 'null'
            ],
            [
                'kode' => 'cariJadwalKuliah',
                'table' => 'dosen, krs',
                'select' => 'nip, nip'
            ],
            [
                'kode' => 'cariJadwalKuliahNbi',
                'table' => 'dosen, krs, mahasiswa'
            ],
            [
                'kode' => 'cariJadwalKuliahHari',
                'table' => 'dosen, krs, hari'
            ],
            [
                'kode' => 'cariJadwalKuliahHariNbi',
                'table' => 'dosen, krs, mahasiswa'
            ],
            [
                'kode' => 'cariJadwalSeminarTA',
                'table' => 'informasi_seminar_ta'
            ],
            [
                'kode' => 'cariJadwalSeminarTANbi',
                'table' => 'informasi_seminar_ta, mahasiswa, dosen'
            ],
            [
                'kode' => 'cariJadwalUjianTA',
                'table' => 'informasi_ujian_ta'
            ],
            [
                'kode' => 'cariJadwalUjianTANbi',
                'table' => 'informasi_ujian_ta, mahasiswa, dosen'
            ],
            [
                'kode' => 'cariJadwalSidangKerjaPraktek',
                'table' => 'kerja_praktek'
            ],
            [
                'kode' => 'cariJadwalSidangKerjaPraktekNbi',
                'table' => 'kerja_praktek, mahasiswa, dosen'
            ],
            [
                'kode' => 'cariPraktikumNama',
                'table' => 'praktikum_laboratorium, kelas_laboratorium'
            ],
            [
                'kode' => 'cariPraktikumHari',
                'table' => 'praktikum_laboratorium, kelas_laboratorium, hari'
            ],
            [
                'kode' => 'cariPraktikum',
                'table' => 'praktikum_laboratorium, kelas_labotarorium'
            ],
            [
                'kode' => 'cariNilaiPraktikum',
                'table' => 'praktikum_laboratorium, kelas_laboratorium, kelas_laboratorium_mahasiswa, mahasiswa'
            ],
            [
                'kode' => 'cariNilaiPraktikumNama',
                'table' => 'praktikum_laboratorium, kelas_laboratorium, kelas_laboratorium_mahasiswa, mahasiswa'
            ],
            [
                'kode' => 'cariJadwalPendaftaranSeminarTA',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariJadwalPendaftaranUjianTA',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariJadwalPendaftaranKerjaPraktek',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariSyaratTA',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariProsedurTA',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariSyaratKerjaPraktek',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariProsedurKerjaPraktek',
                'table' => 'prosedur'
            ],
            [
                'kode' => 'cariSyaratYudisium',
                'table' => 'prosedur'
            ]
        ];
        Settings::insert($data);
    }
}
