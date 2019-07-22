<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DosenTableSeeder::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(HariTableSeeder::class);
        $this->call(MataKuliahTableSeeder::class);
        $this->call(JamTableSeeder::class);
        // $this->call(LokasiDosenTableSeeder::class);
        $this->call(KrsTableSeeder::class);
        // $this->call(SettingTableSeeder::class);
        $this->call(ProsedurTableSeeder::class);
        $this->call(InformasiSeminarTaTableSeeder::class);
        $this->call(InformasiUjianTaTableSeeder::class);
        $this->call(KerjaPraktekTableSeeder::class);
        $this->call(LaboratoriumTableSeeder::class);
        $this->call(AsistenLaboratoriumTableSeeder::class);
        $this->call(PraktikumLaboratoriumTableSeeder::class);
        $this->call(KelasLaboratoriumTableSeeder::class);
        $this->call(KelasLaboratoriumMahasiswaTableSeeder::class);
    }
}
