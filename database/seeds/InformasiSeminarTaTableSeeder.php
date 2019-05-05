<?php

use Illuminate\Database\Seeder;
use App\Models\InformasiSeminarTa;

class InformasiSeminarTaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformasiSeminarTa::truncate();
        $data = [
            [
                'nbi' => 1461505248,
                'nama' => 'Muhammad Kusni',
                'judul' => 'PEMBUATAN APLIKASI WISATA BANJARMASIN',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505300,
                'nama' => 'Fajar Dwi Yunanto',
                'judul' => 'PEMBUATAN APLIKASI REMINDER AKTIFITAS MAHASISWA BERBASIS ANDROID',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505307,
                'nama' => 'Ahmad Mirdas',
                'judul' => 'SIMULASI SISTEM VOTING MENGGUNAKAN TEKNOLOGI BLOCKCHAIN ETHEREUM',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505251,
                'nama' => 'Bimo Satriyo N. P.',
                'judul' => 'PEMBUATAN APLIKASI POINT OF SALE BERBASIS ANDROID',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505276,
                'nama' => 'Erick Surya Dinata',
                'judul' => 'OPTIMALISASI CHATBOT UNTUK MEDIA KOMUNIKASI INTERAKTIF DI JURUSAN TEKNIK INFORMATIKA UNTAG SURABAYA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505308,
                'nama' => 'Danar Krisharmadji',
                'judul' => 'APLIKASI PENELUSURAN LOKASI DOSEN DI LUAR DAN DI DALAM RUANGAN TERTENTU DENGAN RFID DAN GPS ',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461404729,
                'nama' => 'Fernando C. Pampang',
                'judul' => 'APLIKASI SISTEM PAKAR DIAGNOSIS PENYAKIT DENGAN CHAT BOT',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505069,
                'nama' => 'Bayu Setiyo A. U.',
                'judul' => 'SISTEM INFORMASI MANAJEMEN INVENTORY DAN KEUANGAN DESA KEDURUS PASAR LAMA BERBASIS WEBSITE DENGAN MENGGUNAKAN SMS GATEWAY DAN METODE ACCRUAL BASIS',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461404769,
                'nama' => 'Yongky Juniansyah',
                'judul' => 'PENINGKATAN OBJEK PARIWISATA DI KABUPATEN MOJOKERTO MENGGUNAKAN METODE PROTOTYPE BERBASIS WEBSITE',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505133,
                'nama' => 'Afif Rianto Putra',
                'judul' => 'PERANCANGAN SISTEM O-TAILOR BERBASIS ANDROID',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505159,
                'nama' => 'Galih Khoirul Ludin ',
                'judul' => 'SISTEM ADMINISTRASI AKADEMIK SEKOLAHAN MADRASAH TSANAWIYAH',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505252,
                'nama' => 'Hendro Rahmat Saputro',
                'judul' => 'IMPLEMENTASI BLOCKCHAIN ETHEREUM PADA UJIAN MULTIPLE CHOICE DI TEKNIK INFORMATIKA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461404681,
                'nama' => 'Oki Surya Dharmawan',
                'judul' => 'SIMULASI SISTEM INFORMASI JASA PENGIRIMAN PT. AGHASA VALVA LOGISTIC INDONESIA BERBASIS ANDROID',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505081,
                'nama' => 'Yulita Susilowati',
                'judul' => 'MONITORING SDM DALAM PELAKSANAAN PROJECT BERBASIS ANDROID UNTUK PT. GLOBAL BERSAMA UTAMA',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 461304360,
                'nama' => 'Ayub Pujo Utomo Daniel',
                'judul' => 'SISTEM INFORMASI MANAJEMEN RESERVASI PAKET FOTOGRAFI DAN TOUR BERBASIS WEB DI CV. CEKRAKCEKRIK',
                'ketua_penguji' => 'Sugiono, Ir., MT',
                'anggota_penguji_1' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461404986,
                'nama' => 'Anang Musthofa',
                'judul' => 'PEMBUATAN ONLINE SHOP BERBASIS WEB PADA TOKO MEKAR-BANGKALAN',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461405004,
                'nama' => 'Arif Hidayat',
                'judul' => 'PEMBUATAN SISTEM INFORMASI PEMESANAN PRODUK KACA PADA PT. MULTI ARTHAMAS GLASS INDUSTRY MENGGUNAKAN METODE APRIORI BERBASIS WEB',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505074,
                'nama' => 'Vickry Ardiansyah',
                'judul' => 'MENENTUKAN POSISI PEMAIN SEPAK BOLA DENGAN METODE DEMPSTER SHAFER',
                'ketua_penguji' => 'Roenadi Koesdijarto, Ir.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Geri Kusnanto, S.Kom.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461404998,
                'nama' => 'Jumari',
                'judul' => 'SISTEM INFORMASI OPEN TRIP WISATA GUNUNG DIPULAU JAWA BERBASIS WEB',
                'ketua_penguji' => 'Geri Kusnanto, S.Kom.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Roenadi Koesdijarto, Ir.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505214,
                'nama' => 'Habibur Rahman',
                'judul' => 'SISTEM INFORMASI MANAGEMEN PENJUALAN DAN PEMASARAN DI PETERNAKAN AYAM JOPER (STUDY KASUS PETERNAKAN AYAM JOPER)',
                'ketua_penguji' => 'Geri Kusnanto, S.Kom.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Roenadi Koesdijarto, Ir.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505147,
                'nama' => 'Tri Suli Prasetyo',
                'judul' => 'PENERAPAN SISTEM (AUTOMATED ESSAY SCORRING)AES PADA APLIKASI E-LEARNING BERBASIS WEB.',
                'ketua_penguji' => 'Geri Kusnanto, S.Kom.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Roenadi Koesdijarto, Ir.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505259,
                'nama' => 'Mahendra Firmansyah',
                'judul' => 'PENERAPAN FREQUENCY,RECENCY DAN MONETARY PADA WEBSITE PENJUALAN PT. DITRA MANUNGGAL JAYA',
                'ketua_penguji' => 'Geri Kusnanto, S.Kom.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Roenadi Koesdijarto, Ir.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
            [
                'nbi' => 1461505098,
                'nama' => 'Muchamad Nur Z.',
                'judul' => 'APLIKASI PENENTUAN RUTE TEREFEKTIF DALAM PROSES DISTRIBUSI PRODUK PADA PT.MATAHARI YUDHA PERKASA',
                'ketua_penguji' => 'Geri Kusnanto, S.Kom.,MM',
                'anggota_penguji_1' => 'Sugiono, Ir., MT',
                'anggota_penguji_2' => 'Roenadi Koesdijarto, Ir.,MM',
                'ruang' => 'Q-307',
                'tanggal' => '2019-05-06',
                'periode' => 1,
                'tahun' => '2018'
            ],
        ];

        InformasiSeminarTa::insert($data);
    }
}
