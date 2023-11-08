<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class beritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul' => 'Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023',
            'isi' => 'Pekanbaru- Dosen Teknik Informatika Polbeng Kasmawi, M.Kom bersama M.Nasir, M.Kom melaksanakan salah satu Tri Dharma Perguruan Tinggi dalam bentuk Pengabdian Masyarakat dengan menjadi Narasumber pada kegiatan'
        ]);
    }
}
