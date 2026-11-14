<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UlasanSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ulasan_alumni')->insert([
            [
                'alumni_id' => 1,
                'ulasan' => 'Saya sangat puas dengan pengalaman saya di universitas ini. Dosen-dosennya sangat kompeten dan fasilitasnya memadai.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumni_id' => 2,
                'ulasan' => 'Universitas ini memberikan banyak kesempatan untuk mengembangkan diri. Saya merasa siap menghadapi dunia kerja setelah lulus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumni_id' => 3,
                'ulasan' => 'dosen-dosennya sangat membantu dan selalu siap memberikan bimbingan. Saya merasa beruntung bisa belajar di sini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumni_id' => 4,
                'ulasan' => 'mengikuti berbagai kegiatan organisasi di kampus membuat saya lebih percaya diri dan memiliki banyak pengalaman berharga.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
