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
                "uuid" => "111",
                "nama" => "Geri Kusnanto, S.Kom.,MM.",
                "nip" => "20460940401",
                "nomor_telepon" => "08155015181",
                "alamat" => "Jl. SiwalanKerto Utara II/39 Surabaya ( Nginden Baru VIII/B-20 Perum Dosen Untag)",
                "jenis_kelamin" => "L",
                "imei" => "111"
            ],

            [
                "uuid" => "112",
                "nama" => "Dr. Ir. Muaffaq Achmad Jani, M.Eng",
                "nip" => "20450000515",
                "nomor_telepon" => "0818514175",
                "alamat" => "Jl. SutorejoTimur 9/19 Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "112"
            ],

            [
                "uuid" => "113",
                "nama" => "Ery Sadewa Yudha Wrahatnala, S.Kom., MM",
                "nip" => "20460950416",
                "nomor_telepon" => "081330707097",
                "alamat" => "Taman Pondok Legi 2 / B  - 3Pepelegi – Waru, Sidoarjo",
                "jenis_kelamin" => "L",
                "imei" => "113"
            ],

            [
                "uuid" => "114",
                "nama" => "Dr. Fajar Astuti Hermawati, S.Kom., M.Kom",
                "nip" => "20460000512",
                "nomor_telepon" => "081331853372",
                "alamat" => "Sukolilo Park Regency K-18 Keputih",
                "jenis_kelamin" => "P",
                "imei" => "114"
            ],

            [
                "uuid" => "115",
                "nama" => "Ir. Roenadi Koesdijarto, MM",
                "nip" => "20450920281",
                "nomor_telepon" => "08123201817",
                "alamat" => "Jl. Gajah Mada I No 29, Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "115"
            ],

            [
                "uuid" => "116",
                "nama" => "Muhamad Firdaus, ST., M.Kom",
                "nip" => "20460030555",
                "nomor_telepon" => "03170547031",
                "alamat" => "Jl. Ikan Bandeng II, Desa Peranti Sedati, Sidoarjo",
                "jenis_kelamin" => "L",
                "imei" => "116"
            ],

            [
                "uuid" => "117",
                "nama" => "Mochamad Sidqon, S.Si., M.Si",
                "nip" => "20410960490",
                "nomor_telepon" => "085258258199",
                "alamat" => "Jl. Bromo No. 1  Kab. Pasuruan",
                "jenis_kelamin" => "L",
                "imei" => "117"
            ],

            [
                "uuid" => "118",
                "nama" => "Ir. Agus Darwanto, MM",
                "nip" => "20460950407",
                "nomor_telepon" => "08121713779",
                "alamat" => "Perum.Wikarsa Blok F-36, Mojokerto",
                "jenis_kelamin" => "L",
                "imei" => "118"
            ],
            [
                "uuid" => "119",
                "nama" => "Anton Breva Yunanda, ST., M.MT.",
                "nip" => "20460000513",
                "nomor_telepon" => "08123565397",
                "alamat" => "Jl. Kupang Indah XVII/No.19 Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "119"
            ],
            [
                "uuid" => "120",
                "nama" => "Supangat, M.Kom.,ITIL., COBIT",
                "nip" => "20460110602",
                "nomor_telepon" => "081803081420",
                "alamat" => "Jl. Jagir Sidomukti IV/26 Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "120"
            ],
            [
                "uuid" => "121",
                "nama" => "Ir. Sugiono, MT",
                "nip" => "20460960502",
                "nomor_telepon" => "0811377133",
                "alamat" => "Regency Kuda Dua Blok C-10 Jagir Wonokromo, Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "121"
            ],
            [
                "uuid" => "122",
                "nama" => "Luvia Friska Narulita, S.ST., MT",
                "nip" => "20460150653",
                "nomor_telepon" => "08170344085",
                "alamat" => "-",
                "jenis_kelamin" => "P",
                "imei" => "122"
            ],
            [
                "uuid" => "123",
                "nama" => "Fridy Mandita, S.Kom., M.Sc",
                "nip" => "20460150648",
                "nomor_telepon" => "081330212991",
                "alamat" => "Jl. Teladan No. 4, Aloha Gedangan Sidoarjo",
                "jenis_kelamin" => "L",
                "imei" => "123"
            ],
            [
                "uuid" => "124",
                "nama" => "Agyl Ardi Rahmadi, S.Kom., M.A",
                "nip" => "20460150666",
                "nomor_telepon" => "081289836018",
                "alamat" => "Jl. Wisma Permai I No. 47, Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "124"
            ],
            [
                "uuid" => "125",
                "nama" => "Ahmad Habib, S.Kom., MM",
                "nip" => "20460150665",
                "nomor_telepon" => "087883056900",
                "alamat" => "Jl. Menanggal IV/35A, Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "125"
            ],
            [
                "uuid" => "126",
                "nama" => "Agung Kridoyono, S.ST., MT",
                "nip" => "20460150654",
                "nomor_telepon" => "085853050093",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "126"
            ],
            [
                "uuid" => "127",
                "nama" => "Agus Hermanto, S.Kom., M.MT",
                "nip" => "20460150675",
                "nomor_telepon" => "081252334881",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "127"
            ],
            [
                "uuid" => "128",
                "nama" => "Anang Pramono, S.Kom., MM",
                "nip" => "20460150676",
                "nomor_telepon" => "08972735055",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "128"
            ],
            [
                "uuid" => "129",
                "nama" => "Elvianto Dwi Hartono, ST., MM., M.Kom",
                "nip" => "20460150686",
                "nomor_telepon" => "085852414152",
                "alamat" => "Jl. Lumbu Tengah Blok 3L No.121 Rawalumbu - Bekasi",
                "jenis_kelamin" => "L",
                "imei" => "129"
            ],
            [
                "uuid" => "130",
                "nama" => "Anis Rahmawati Amna, S.Kom., M.Kom., MBA",
                "nip" => "20460150687",
                "nomor_telepon" => "081xxx2",
                "alamat" => "-",
                "jenis_kelamin" => "P",
                "imei" => "130"
            ],
            [
                "uuid" => "131",
                "nama" => "Ghaluh Indah Permata Sari, S.Kom., M.Kom",
                "nip" => "20460130652",
                "nomor_telepon" => "081xxx3",
                "alamat" => "-",
                "jenis_kelamin" => "P",
                "imei" => "131"
            ],
            [
                "uuid" => "132",
                "nama" => "Intan Dzikria, S.Kom., MIM.",
                "nip" => "20460160701",
                "nomor_telepon" => "081xxx4",
                "alamat" => "Jl. Kalisari Permai M-10/61, Surabaya",
                "jenis_kelamin" => "P",
                "imei" => "132"
            ],
            [
                "uuid" => "133",
                "nama" => "Aidil Primasetya Armin, S.ST., M.T.",
                "nip" => "20460160700",
                "nomor_telepon" => "085645008629",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "133"
            ],
            [
                "uuid" => "134",
                "nama" => "Dwi Harini Sulistyawati, SST., MT",
                "nip" => "20460160702",
                "nomor_telepon" => "081330058996",
                "alamat" => "-",
                "jenis_kelamin" => "P",
                "imei" => "134"
            ],
            [
                "uuid" => "135",
                "nama" => "Elsen Ronando, S.Si., M.Si., M.Sc",
                "nip" => "20460160708",
                "nomor_telepon" => "081946444401",
                "alamat" => "Griya Amerta Regency EE/9 Medayu Utara Surabaya",
                "jenis_kelamin" => "L",
                "imei" => "135"
            ],
            [
                "uuid" => "136",
                "nama" => "Bagus Hardiansyah, S.Kom., M.Si",
                "nip" => "20460160719",
                "nomor_telepon" => "085230510558",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "136"
            ],
            [
                "uuid" => "137",
                "nama" => "Aris Sudaryanto, S.ST., MT",
                "nip" => "20460160724",
                "nomor_telepon" => "085735950554",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "137"
            ],
            [
                "uuid" => "138",
                "nama" => "Nuril Esti Khomariah, S.ST., MT",
                "nip" => "20460160725",
                "nomor_telepon" => "085732020809",
                "alamat" => "-",
                "jenis_kelamin" => "P",
                "imei" => "138"
            ],
            [
                "uuid" => "139",
                "nama" => "Samsul Huda, S.ST., MT",
                "nip" => "20460160729",
                "nomor_telepon" => "081xxx10",
                "alamat" => "RT.2 RW.4 Desa Tenggong Kec. Rejotangan Kb. Tulungagung",
                "jenis_kelamin" => "L",
                "imei" => "139"
            ],
            [
                "uuid" => "140",
                "nama" => "Puteri Noraisya Primandari, S.ST., M.IM.",
                "nip" => "20460170736",
                "nomor_telepon" => "085646414868",
                "alamat" => "RT.2 RW.4 Desa Tenggong Kec. Rejotangan Kb. Tulungagung",
                "jenis_kelamin" => "P",
                "imei" => "140"
            ],
            [
                "uuid" => "141",
                "nama" => "Yusrida Muflihah, S.Kom., M.Kom",
                "nip" => "20460180775",
                "nomor_telepon" => "08113590222",
                "alamat" => "Menanggal I no. 22",
                "jenis_kelamin" => "P",
                "imei" => "141"
            ],
            [
                "uuid" => "142",
                "nama" => "Naufal Abdillah, S.Kom., M.Kom",
                "nip" => "20460190803",
                "nomor_telepon" => "081xxx11",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "142"
            ],
            [
                "uuid" => "143",
                "nama" => "Andrey Kartika Widhy Hapatenda, S.Kom., M.Kom",
                "nip" => "20460190804",
                "nomor_telepon" => "081xxx12",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "143"
            ],
            [
                "uuid" => "144",
                "nama" => "Ardy Januantoro, S.Kom., M.MT",
                "nip" => "20460190806",
                "nomor_telepon" => "081xxx13",
                "alamat" => "-",
                "jenis_kelamin" => "L",
                "imei" => "144"
            ],


        ];
        Schema::enableForeignKeyConstraints();
        Dosen::insert($data);
    }
}
