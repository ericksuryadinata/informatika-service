<?php

use Illuminate\Database\Seeder;
use App\Models\AsistenLaboratorium;

class AsistenLaboratoriumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        AsistenLaboratorium::truncate();
        $data = [
            ["id" => 7,    'laboratorium_kode' => 462,    'kode' => '4535', 'nama' => 'Muhamad',      'alamat' => 'Balongbendo', 'no_hp' => '087854316264'],
            ["id" => 8,    'laboratorium_kode' => 461,    'kode' => 'david', 'nama' => 'David Suhartono',   'alamat' => 'Manyar Jaya 11/40', 'no_hp' => '081333398831'],
            ["id" => 9,    'laboratorium_kode' => 463,    'kode' => 'daus', 'nama' => 'Firdaus Nur Ardi',   'alamat' => 'Sidoarjo',       'no_hp' => '083857534573'],
            ["id" => 10,    'laboratorium_kode' => 461,    'kode' => 'aditnanda', 'nama' => 'Aditya Nanda Utama',   'alamat' => 'Permata Taman Delta K-25, Candi, Sidoarjo',                            'no_hp' => '082331429578'],
            ["id" => 11,    'laboratorium_kode' => 461,    'kode' => 'YEP', 'nama' => 'Yuan Eko P.',   'alamat' => 'Tambak Pring Barat 1/21',           'no_hp' => '08976301919'],
            ["id" => 12,    'laboratorium_kode' => 463,    'kode' => '1461505193', 'nama' => 'Muhammad Amiruzzain Al. B',   'alamat' => 'Sidoarjo',       'no_hp' => '085746443208'],
            ["id" => 13,    'laboratorium_kode' => 464,    'kode' => 'dungdung', 'nama' => 'Asisten Lab Mikro RL',   'alamat' => 'Surabaya',       'no_hp' => '0'],
            ["id" => 14,    'laboratorium_kode' => 464,    'kode' => '4404', 'nama' => 'Wisnu Setiyawan',   'alamat' => 'Saradan',        'no_hp' => '085606261722'],
            ["id" => 15,    'laboratorium_kode' => 462,    'kode' => '4850', 'nama' => 'Nalendra Setyo Hari',   'alamat' => 'Sidoarjo',       'no_hp' => '087702089392'],
            ["id" => 16,    'laboratorium_kode' => 462,    'kode' => '243', 'nama' => 'Zaky D.',   'alamat' => 'Jl. Ketintang Baru XVI no 27',       'no_hp' => '087862488403'],
            ["id" => 17,    'laboratorium_kode' => 462,    'kode' => 'kholilul', 'nama' => 'Kholilul Rohman Kurniawan',   'alamat' => 'Asemrowo',       'no_hp' => '082332811750'],
            ["id" => 18,    'laboratorium_kode' => 462,    'kode' => '4306', 'nama' => 'Mohammad Khafid Barokum',   'alamat' => 'Kedinding',      'no_hp' => '0'],
            ["id" => 19,    'laboratorium_kode' => 462,    'kode' => 'rizaldi', 'nama' => 'Rizaldi Pradana',   'alamat' => 'Surabaya',       'no_hp' => '0'],
            ["id" => 20,    'laboratorium_kode' => 464,    'kode' => 'mikrorl', 'nama' => 'Lab. Mikrokontroler & Rangkain Logika',    'alamat' => 'UNTAG',          'no_hp' => 'Isi Dewe'],
            ["id" => 21,    'laboratorium_kode' => 464,    'kode' => 'aprikar', 'nama' => 'Aprikar',   'alamat' => 'Surabaya',       'no_hp' => 'Isi Dewe'],
            ["id" => 22,    'laboratorium_kode' => 464,    'kode' => 'wahyu', 'nama' => 'wahyu setiyono',   'alamat' => 'Surabaya',       'no_hp' => 'Isi Dewe'],
            ["id" => 23,    'laboratorium_kode' => 461,    'kode' => 'lutfi', 'nama' => 'Muhammad Lutfi',   'alamat' => 'Sidoarjo',       'no_hp' => '085853856200'],
            ["id" => 24,    'laboratorium_kode' => 463,    'kode' => '1461404715', 'nama' => 'Rany Kurnia Sari',   'alamat' => 'Surabaya',       'no_hp' => '08563182628'],
            ["id" => 25,    'laboratorium_kode' => 463,    'kode' => 'kjarkom', 'nama' => 'Kalab Jarkom',   'alamat' => 'Surabaya',       'no_hp' => '0'],
            ["id" => 26,    'laboratorium_kode' => 463,    'kode' => '1461505190', 'nama' => 'Putra Bagus',   'alamat' => 'Sidoarjo',       'no_hp' => '082234931997'],
            ["id" => 27,    'laboratorium_kode' => 463,    'kode' => '1461600148', 'nama' => 'Tyas Drastistiana',   'alamat' => 'Kepatihan Kec. Menganti Kab. Gresik','no_hp' => '0895631517250'],
            ["id" => 28,    'laboratorium_kode' => 461,    'kode' => 'Erick', 'nama' => 'Erick Surya',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 29,    'laboratorium_kode' => 461,    'kode' => 'aldamr01', 'nama' => 'Aldion Amirrul Endryanto',   'alamat' => 'Perum. puri maharani a7-03 , Masangan Wetan , Sukodono , Sidoarjo',    'no_hp' => '081335306460'],
            ["id" => 30,    'laboratorium_kode' => 462,    'kode' => '5656', 'nama' => 'Ridwan R',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 31,    'laboratorium_kode' => 462,    'kode' => '5757', 'nama' => 'Kristo',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 32,    'laboratorium_kode' => 462,    'kode' => '5858', 'nama' => 'trio w',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 33,    'laboratorium_kode' => 465,    'kode' => 'ranyrks', 'nama' => 'Rany Kurnia Sari',   'alamat' => 'Jalan Margorejo 2D No. 25',         'no_hp' => '08563182628'],
            ["id" => 34,    'laboratorium_kode' => 465,    'kode' => 'aldi.as', 'nama' => 'Aldi Samudra',   'alamat' => 'morokrembangan G.6 no.15',           'no_hp' => '089685025414'],
            ["id" => 35,    'laboratorium_kode' => 465,    'kode' => 'ganis', 'nama' => 'Ganis Riswenda',   'alamat' => 'Surabaya ',      'no_hp' => '081'],
            ["id" => 36,    'laboratorium_kode' => 462,    'kode' => 'jeffsuto', 'nama' => 'Jeffry Suyanto',   'alamat' => 'Wonorejo TImur 1 Blok C-7',         'no_hp' => '0856xxxxx'],
            ["id" => 37,    'laboratorium_kode' => 464,    'kode' => 'dila', 'nama' => 'Nurul Fadilah',   'alamat' => 'Kedinding Lor', 'no_hp' => '0'],
            ["id" => 39,    'laboratorium_kode' => 463,    'kode' => 'alfin', 'nama' => 'Mohammad Alfin Khoiri',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 40,    'laboratorium_kode' => 463,    'kode' => '1461700015', 'nama' => 'pradana',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 41,    'laboratorium_kode' => 461,    'kode' => 'arif', 'nama' => 'Arif Nur Rochman',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 42,    'laboratorium_kode' => 461,    'kode' => 'ade', 'nama' => 'Ade Prasetyo',   'alamat' => '-',             'no_hp' => '0'],
            ["id" => 43,    'laboratorium_kode' => 465,    'kode' => 'ridwan', 'nama' => 'Ridwan R',   'alamat' => '-',             'no_hp' => '0'],
        ];
        Schema::enableForeignKeyConstraints();
        AsistenLaboratorium::insert($data);
        //         INSERT INTO `asisten_laboratorium` (`id`, `kode`, `nama`, `alamat`, `no_hp`, `laboratorium_kode`) VALUES
        // (7,	'4535',	'Muhamad',	'Balongbendo',	'087854316264',	'462'),
        // (8,	'david',	'David Suhartono',	'Manyar Jaya 11/40',	'081333398831',	'461'),
        // (9,	'daus',	'Firdaus Nur Ardi',	'Sidoarjo',	'083857534573',	'463'),
        // (10,	'aditnanda',	'Aditya Nanda Utama',	'Permata Taman Delta K-25, Candi, Sidoarjo',	'082331429578',	'461'),
        // (11,	'YEP',	'Yuan Eko P.',	'Tambak Pring Barat 1/21',	'08976301919',	'461'),
        // (12,	'1461505193',	'Muhammad Amiruzzain Al. B',	'Sidoarjo',	'085746443208',	'463'),
        // (13,	'dungdung',	'Asisten Lab Mikro RL',	'Surabaya',	'',	'464'),
        // (14,	'4404',	'Wisnu Setiyawan',	'Saradan',	'085606261722',	'464'),
        // (15,	'4850',	'Nalendra Setyo Hari',	'Sidoarjo',	'087702089392',	'462'),
        // (16,	'243',	'Zaky D.',	'Jl. Ketintang Baru XVI no 27',	'087862488403',	'462'),
        // (17,	'kholilul',	'Kholilul Rohman Kurniawan',	'Asemrowo',	'082332811750',	'462'),
        // (18,	'4306',	'Mohammad Khafid Barokum',	'Kedinding',	'000000000',	'462'),
        // (19,	'rizaldi',	'Rizaldi Pradana',	'Surabaya',	'',	'462'),
        // (20,	'mikrorl',	'Lab. Mikrokontroler & Rangkain Logika',	'UNTAG',	'Isi Dewe',	'464'),
        // (21,	'aprikar',	'Aprikar',	'Surabaya',	'Isi Dewe',	'464'),
        // (22,	'wahyu',	'wahyu setiyono',	'Surabaya',	'Isi Dewe',	'464'),
        // (23,	'lutfi',	'Muhammad Lutfi',	'Sidoarjo',	'085853856200',	'461'),
        // (24,	'1461404715',	'Rany Kurnia Sari',	'Surabaya',	'08563182628',	'463'),
        // (25,	'kjarkom',	'Kalab Jarkom',	'Surabaya',	'0',	'463'),
        // (26,	'1461505190',	'Putra Bagus',	'Sidoarjo',	'082234931997',	'463'),
        // (27,	'1461600148',	'Tyas Drastistiana',	'Kepatihan Kec. Menganti Kab. Gresik',	'0895631517250',	'463'),
        // (28,	'Erick',	'Erick Surya',	'',	'',	'461'),
        // (29,	'aldamr01',	'Aldion Amirrul Endryanto',	'Perum. puri maharani a7-03 , Masangan Wetan , Sukodono , Sidoarjo',	'081335306460',	'461'),
        // (30,	'5656',	'Ridwan R',	'',	'',	'462'),
        // (31,	'5757',	'Kristo',	'',	'',	'462'),
        // (32,	'5858',	'trio w',	'',	'',	'462'),
        // (33,	'ranyrks',	'Rany Kurnia Sari',	'Jalan Margorejo 2D No. 25',	'08563182628',	'465'),
        // (34,	'aldi.as',	'Aldi Samudra',	'morokrembangan G.6 no.15',	'089685025414',	'465'),
        // (35,	'ganis',	'Ganis Riswenda',	'Surabaya',	'081',	'465'),
        // (36,	'jeffsuto',	'Jeffry Suyanto',	'Wonorejo TImur 1 Blok C-7',	'0856xxxxx',	'462'),
        // (37,	'dila',	'Nurul Fadilah',	'Kedinding Lor',	'0',	'464'),
        // (39,	'alfin',	'Mohammad Alfin Khoiri',	'',	'',	'463'),
        // (40,	'1461700015',	'pradana',	'',	'',	'463'),
        // (41,	'arif',	'Arif Nur Rochman',	'',	'',	'461'),
        // (42,	'ade',	'Ade Prasetyo',	'',	'',	'461'),
        // (43,	'ridwan',	'Ridwan R',	'',	'',	'465');
    }
}
