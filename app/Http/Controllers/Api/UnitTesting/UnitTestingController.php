<?php

namespace App\Http\Controllers\Api\UnitTesting;

use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class UnitTestingController extends Controller
{
    $sentence = [
        'lokasi pak sugi',
        'lokasi pak geri',
        'dimana lokasi pak sugi',
        'dimana lokasi pak geri',
        'pak geri sekarang dimana',
        'sugi posisi',
        'pak sugi dimana',
        'pak sugi sekarang ada dimana',
        'pak sugi sekarang terletak dimana',
        'pak sugi udah dikampus ?',
        'hari ini pak sugi ngajar apa',
        'jadwal pak sugi hari ini',
        'jadwal pak sugi hari rabu',
        'hari senin pak geri ngajar apa',
        'pak geri mengajar apa hari senin',
        'jadwal pak roe',
        'jadwal mengajar pak sugi',
        'jadwal pak agyl hari jumat',
        'jadwal pak pangat hari kamis',
        'kamis pak sugi ngajar apa',
        'carikan nomor telepon pak sugi',
        'wa pak sugi',
        'telepon pak sugi',
        'nomor telepon pak sugi berapa',
        'berapa nomor wa pak sugi',
        'telepon pak geri berapa',
        'pak geri nomor teleponnya apa',
        'nomor telepon pak geri',
        'tolong nomor telepon pak geri',
        'cari nomor pak geri',
        'jadwal kuliah hari ini',
        'jadwal kuliah algoritma hari ini',
        'jadwal kuliah algoritma hari kamis',
        'jadwal kuliah nbi 1461505115',
        'jadwal kuliah algoritma nbi 1461505115',
        'kuliah 1461505115 hari kamis',
        'kuliah hari kamis',
        'kuliah hari kamis nbi 1461505115',
        'jadwal kuliah sekarang',
        'jadwal 1461505115 hari senin',
        'jadwal kuliah hari ini',
        'jadwal kuliah pengembangan teknologi web hari ini',
        'jadwal kuliah pemrograman game',
        'jadwal kuliah nbi 1461600076',
        'jadwal kuliah kcbv nbi 1461600076',
        'kuliah 1461600076 hari kamis',
        'kuliah hari kamis',
        'kuliah hari kamis nbi 1461600076',
        'jadwal kuliah sekarang',
        'jadwal 1461600076 hari senin',
        'jadwal kuliah hari ini',
        'jadwal kuliah algoritma hari ini',
        'jadwal kuliah kcbv hari kamis',
        'jadwal kuliah nbi 1461600136',
        'jadwal kuliah komputasi paralel nbi 1461600136',
        'kuliah 1461600136 hari kamis',
        'kuliah hari selasa',
        'kuliah hari rabu nbi 1461600136',
        'jadwal kuliah sekarang',
        'jadwal 1461600136 hari jumat',
        'jadwal kuliah hari ini',
        'jadwal kuliah imk hari ini',
        'jadwal kuliah rekayasa perangkat lunak hari kamis',
        'jadwal kuliah nbi 1461700034',
        'jadwal kuliah teknik kompilasi nbi 1461700034',
        'kuliah 1461700034 hari kamis',
        'kuliah hari jumat',
        'kuliah hari rabu nbi 1461700034',
        'jadwal kuliah sekarang',
        'jadwal 1461700034 hari selasa',
        'jadwal kuliah hari ini',
        'jadwal kuliah etika teknologi informasi hari ini',
        'jadwal kuliah algoritma hari kamis',
        'jadwal kuliah nbi 1461700084',
        'jadwal kuliah aorkom nbi 1461700084',
        'kuliah 1461700084 hari kamis',
        'kuliah hari senin',
        'kuliah hari rabu nbi 1461700084',
        'jadwal kuliah sekarang',
        'jadwal 1461700084 hari senin',
        'jadwal kuliah hari ini',
        'jadwal kuliah sisdig hari ini',
        'jadwal kuliah algoritma hari kamis',
        'jadwal kuliah nbi 1461800033',
        'jadwal kuliah algoritma nbi 1461800033',
        'kuliah 1461800033 hari kamis',
        'kuliah hari senin',
        'kuliah hari selasa nbi 1461800033',
        'jadwal kuliah sekarang',
        'jadwal 1461800033 hari rabu',
        'jadwal kuliah hari ini',
        'jadwal kuliah algoritma hari ini',
        'jadwal kuliah teknik pemrograman lanjut hari kamis',
        'jadwal kuliah nbi 1461800127',
        'jadwal kuliah sistem operasi nbi 1461800127',
        'kuliah 1461800127 hari kamis',
        'kuliah hari selasa',
        'kuliah hari rabu nbi 1461800127',
        'jadwal kuliah sekarang',
        'jadwal 1461800127 hari senin',
        'jadwal kuliah hari ini',
        'jadwal kuliah ptw hari ini',
        'jadwal kuliah so hari kamis',
        'jadwal kuliah nbi 1461809999',
        'jadwal kuliah aorkom nbi 1461809999',
        'kuliah 1461809999 hari jumat',
        'kuliah hari rabu',
        'kuliah hari selasa nbi 1461809999',
        'jadwal kuliah sekarang',
        'jadwal 1461809999 hari senin',
        'jadwal seminar TA',
        'seminar TA 1461505276',
        'jadwal ujian TA',
        'ujian TA 1461505276',
        'jadwal pendaftaran ujian ta',
        'jadwal pendaftaran seminar ta',
        'prosedur ujian ta',
        'prosedur seminar ta',
        'seminar TA 1461600076',
        'jadwal ujian TA',
        'ujian TA 1461600076',
        'jadwal praktikum daskom',
        'jadwal praktikum hari kamis',
        'jadwal praktikum hari ini',
        'nilai praktikum 1461505115',
        'nilai praktikum ptw 1461505115',
        'praktikum ptw 1461505115',
        'praktikum 1461505115',
        'nilai praktikum 1461600136',
        'nilai praktikum ptw 1461600136',
        'praktikum sisdig 1461600136',
        'praktikum 1461600136',
        'nilai praktikum 1461700034',
        'nilai praktikum pemrograman dasar 1461700034',
        'praktikum mandatin 1461700034',
        'praktikum 1461700034',
        'nilai praktikum 1461700084',
        'nilai praktikum pbo 1461700084',
        'praktikum sistem jarkom 1461700084',
        'praktikum 1461700084',
        'nilai praktikum 1461800033',
        'nilai praktikum program dasar 1461800033',
        'praktikum sistem jarkom 1461800033',
        'praktikum 1461800033',
        'nilai praktikum 1461800127',
        'nilai praktikum program dasar 1461800127',
        'praktikum sistem jarkom 1461800127',
        'praktikum 1461800127',
        'jadwal sidang praktek',
        'jadwal pendaftaran sidang kerja praktek',
        'sidang kerja praktek kapan ?',
        'carikan jadwal sidang kerja praktek',
        'pendaftaran sidang kerja praktek',
        'prosedur kerja praktek',
        'syarat kerja praktek',
        'prosedur yudisium',
        'syarat yudisium',
        'pak sugi alamatnya dimana ?',
        'rumah pak sugi dimana ?',
        'hai',
        'siapa kamu ?',
        'saya siapa ?',
        'dimana kamu ?',
        'kamu siapa sih ?',
        'teknik informatika akreditasinya apa ?'
    ];
    $response = Curl::to('http://127.0.0.1:3333/api/v1/data/extraction')
        ->withData(array('sentence' => $body))
        ->post();
    $response = json_decode($response);
    $reply = $response->result;

}
