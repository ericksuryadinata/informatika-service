<?php

use Illuminate\Database\Seeder;
use App\Models\KelasLaboratoriumMahasiswa;

class KelasLaboratoriumMahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KelasLaboratoriumMahasiswa::truncate();
        $data = [
            [
                "kelas_laboratorium_id" => 710,
                "nbi" => 1461800033,
                "p1" => 90,
                "p2" => 90,
                "p3" => 90,
                "p4" => 90,
                "p5" => 90,
                "ujian" => 90,
                "dosen" => 80,
                "akhir" => 88,
                "grade" => "A",
                "laporan" => "Valid"
            ],
            ["kelas_laboratorium_id" => 547,    "nbi" => 1461700034,    "p1" => 0, "p2" => 0, "p3" => 0, "p4" => 0, "p5" => 0, "ujian" => 0, "dosen" => 0, "akhir" => 0, "grade" => "E", "laporan" => "Belum"],
            ["kelas_laboratorium_id" => 701,    "nbi" => 1461700034,    "p1" => 90, "p2" => 60, "p3" => 60, "p4" => 90, "p5" => 70, "ujian" => 65, "dosen" => 85, "akhir" => 73.5, "grade" => "B+", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 770,    "nbi" => 1461700034,    "p1" => 85, "p2" => 65, "p3" => 65, "p4" => 75, "p5" => 0, "ujian" => 70, "dosen" => 75, "akhir" => 72.75, "grade" => "B+", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 628,    "nbi" => 1461700034,    "p1" => 85, "p2" => 85, "p3" => 85, "p4" => 75, "p5" => 0, "ujian" => 40, "dosen" => 80, "akhir" => 75.5, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 653,    "nbi" => 1461700034,    "p1" => 75, "p2" => 70, "p3" => 75, "p4" => 85, "p5" => 0, "ujian" => 85, "dosen" => 75, "akhir" => 77.25, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 600,    "nbi" => 1461700034,    "p1" => 60, "p2" => 50, "p3" => 90, "p4" => 60, "p5" => 65, "ujian" => 65, "dosen" => 70, "akhir" => 66, "grade" => "B", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 493,    "nbi" => 1461700034,    "p1" => 70, "p2" => 80, "p3" => 45, "p4" => 60, "p5" => 55, "ujian" => 70, "dosen" => 75, "akhir" => 67, "grade" => "B", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 712,    "nbi" => 1461800127,    "p1" => 90, "p2" => 90, "p3" => 90, "p4" => 90, "p5" => 90, "ujian" => 85, "dosen" => 75, "akhir" => 85.5, "grade" => "A", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 768,    "nbi" => 1461700084,    "p1" => 85, "p2" => 70, "p3" => 75, "p4" => 80, "p5" => 0, "ujian" => 75, "dosen" => 85, "akhir" => 79, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 499,    "nbi" => 1461700084,    "p1" => 90, "p2" => 75, "p3" => 75, "p4" => 75, "p5" => 75, "ujian" => 90, "dosen" => 89, "akhir" => 83.8, "grade" => "A-", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 618,    "nbi" => 1461700084,    "p1" => 85, "p2" => 85, "p3" => 85, "p4" => 85, "p5" => 0, "ujian" => 90, "dosen" => 75, "akhir" => 83.25, "grade" => "A-", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 582,    "nbi" => 1461700084,    "p1" => 90, "p2" => 90, "p3" => 60, "p4" => 90, "p5" => 90, "ujian" => 65, "dosen" => 88, "akhir" => 79.1, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 745,    "nbi" => 1461700084,    "p1" => 90, "p2" => 90, "p3" => 90, "p4" => 90, "p5" => 90, "ujian" => 90, "dosen" => 70, "akhir" => 86, "grade" => "A", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 643,    "nbi" => 1461700084,    "p1" => 90, "p2" => 90, "p3" => 90, "p4" => 85, "p5" => 0, "ujian" => 78, "dosen" => 85, "akhir" => 86.2, "grade" => "A", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 448,    "nbi" => 1461600136,    "p1" => 80, "p2" => 0, "p3" => 85, "p4" => 75, "p5" => 0, "ujian" => 60, "dosen" => 75, "akhir" => 63.75, "grade" => "B-", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 563,    "nbi" => 1461600136,    "p1" => 80, "p2" => 80, "p3" => 75, "p4" => 75, "p5" => 0, "ujian" => 75, "dosen" => 80, "akhir" => 77.75, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 725,    "nbi" => 1461600136,    "p1" => 80, "p2" => 85, "p3" => 75, "p4" => 85, "p5" => 0, "ujian" => 75, "dosen" => 80, "akhir" => 80, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 286,    "nbi" => 1461600136,    "p1" => 0, "p2" => 0, "p3" => 0, "p4" => 0, "p5" => 0, "ujian" => 0, "dosen" => 0, "akhir" => 0, "grade" => "E", "laporan" => "Belum"],
            ["kelas_laboratorium_id" => 469,    "nbi" => 1461600136,    "p1" => 90, "p2" => 85, "p3" => 65, "p4" => 75, "p5" => 0, "ujian" => 80, "dosen" => 84, "akhir" => 80.25, "grade" => "A-", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 382,    "nbi" => 1461600136,    "p1" => 75, "p2" => 85, "p3" => 70, "p4" => 65, "p5" => 75, "ujian" => 80, "dosen" => 85, "akhir" => 78, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 291,    "nbi" => 1461600136,    "p1" => 75, "p2" => 75, "p3" => 70, "p4" => 70, "p5" => 75, "ujian" => 70, "dosen" => 85, "akhir" => 74.5, "grade" => "B+", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 674,    "nbi" => 1461600136,    "p1" => 90, "p2" => 80, "p3" => 75, "p4" => 93, "p5" => 0, "ujian" => 90, "dosen" => 80, "akhir" => 84.2, "grade" => "A-", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 201,    "nbi" => 1461505115,    "p1" => 85, "p2" => 80, "p3" => 75, "p4" => 75, "p5" => 0, "ujian" => 75, "dosen" => 80, "akhir" => 78.33, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 424,    "nbi" => 1461505115,    "p1" => 80, "p2" => 85, "p3" => 85, "p4" => 85, "p5" => 0, "ujian" => 50, "dosen" => 77, "akhir" => 77, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 312,    "nbi" => 1461505115,    "p1" => 75, "p2" => 85, "p3" => 60, "p4" => 70, "p5" => 90, "ujian" => 80, "dosen" => 80, "akhir" => 78, "grade" => "AB", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 168,    "nbi" => 1461505115,    "p1" => 70, "p2" => 60, "p3" => 70, "p4" => 75, "p5" => 50, "ujian" => 70, "dosen" => 80, "akhir" => 69.5, "grade" => "B", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 302,    "nbi" => 1461505115,    "p1" => 90, "p2" => 60, "p3" => 70, "p4" => 75, "p5" => 75, "ujian" => 65, "dosen" => 80, "akhir" => 72.5, "grade" => "B+", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 61,  "nbi" => 1461505115,    "p1" => 75, "p2" => 75, "p3" => 80, "p4" => 75, "p5" => 70, "ujian" => 60, "dosen" => 80, "akhir" => 71.5, "grade" => "B+", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 367,    "nbi" => 1461505115,    "p1" => 75, "p2" => 72, "p3" => 70, "p4" => 75, "p5" => 0, "ujian" => 70, "dosen" => 60, "akhir" => 69.3, "grade" => "B", "laporan" => "Valid"],
            ["kelas_laboratorium_id" => 130,    "nbi" => 1461505115,    "p1" => 80, "p2" => 70, "p3" => 75, "p4" => 65, "p5" => 100, "ujian" => 60, "dosen" => 78, "akhir" => 72.6, "grade" => "B+", "laporan" => "Valid"],

        ];
        KelasLaboratoriumMahasiswa::insert($data);
    }
}
