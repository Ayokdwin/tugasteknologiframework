<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('data_mahasiswa')->insert([
            [
                'nama' => 'Andi Pratama',
                'nim' => '2023001001',
                'jurusan' => 'Teknik Informatika',
                'tahun' => 2023,
                'alamat' => 'Jl. Merdeka No. 10, Bandung',
            ],
            [
                'nama' => 'Siti Rahmawati',
                'nim' => '2023001002',
                'jurusan' => 'Sistem Informasi',
                'tahun' => 2023,
                'alamat' => 'Jl. Diponegoro No. 5, Yogyakarta',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '2022001003',
                'jurusan' => 'Teknik Elektro',
                'tahun' => 2022,
                'alamat' => 'Jl. Sudirman No. 22, Semarang',
            ],
            [
                'nama' => 'Dewi Lestari',
                'nim' => '2024001004',
                'jurusan' => 'Manajemen',
                'tahun' => 2024,
                'alamat' => 'Jl. Ahmad Yani No. 8, Surabaya',
            ],
            [
                'nama' => 'Rizky Ramadhan',
                'nim' => '2022001005',
                'jurusan' => 'Akuntansi',
                'tahun' => 2022,
                'alamat' => 'Jl. Pahlawan No. 14, Malang',
            ],
            [
                'nama' => 'Nadia Putri',
                'nim' => '2024001006',
                'jurusan' => 'Ilmu Komunikasi',
                'tahun' => 2024,
                'alamat' => 'Jl. Kartini No. 3, Jakarta',
            ],
            [
                'nama' => 'Fajar Nugraha',
                'nim' => '2021001007',
                'jurusan' => 'Teknik Sipil',
                'tahun' => 2021,
                'alamat' => 'Jl. Gajah Mada No. 17, Denpasar',
            ],
            [
                'nama' => 'Maya Anggraini',
                'nim' => '2023001008',
                'jurusan' => 'Pendidikan Matematika',
                'tahun' => 2023,
                'alamat' => 'Jl. Pemuda No. 6, Makassar',
            ],
        ]);
        $this->call(AlumniSeeder::class);
        $this->call(UlasanSedder::class);
    }
}
