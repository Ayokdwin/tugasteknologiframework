<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumni')->insert([
            [
                'nama' => 'John Doe',
                'nim' => '123456789',
                'jurusan' => 'Teknik Informatika',
                'tahun_lulus' => 2020,
                'pekerjaan' => 'Software Engineer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jane Smith',
                'nim' => '987654321',
                'jurusan' => 'Sistem Informasi',
                'tahun_lulus' => 2019,
                'pekerjaan' => 'Data Analyst',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Yanto',
                'nim' => '123456789',
                'jurusan' => 'Teknik Informatika',
                'tahun_lulus' => 2018,
                'pekerjaan' => 'Software Engineer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Filla ',
                'nim' => '0913401348',
                'jurusan' => 'Sistem Informasi',
                'tahun_lulus' => 2019,
                'pekerjaan' => 'owner MBG',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
