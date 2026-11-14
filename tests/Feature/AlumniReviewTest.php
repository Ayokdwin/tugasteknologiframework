<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlumniReviewTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_alumni_and_review_are_saved_and_shown_on_homepage(): void
    {
        $response = $this->post(route('alumni.store'), [
            'nama' => 'Alumni Terbaru',
            'nim' => '20260001',
            'jurusan' => 'Sistem Informasi',
            'pekerjaan' => 'Analis Sistem',
            'tahun_lulus' => now()->year,
            'ulasan' => 'Pengalaman belajar yang sangat baik.',
        ]);

        $response->assertRedirect(route('beranda'));

        $this->assertDatabaseHas('alumni', [
            'nim' => '20260001',
            'nama' => 'Alumni Terbaru',
        ]);
        $this->assertDatabaseHas('ulasan_alumni', [
            'ulasan' => 'Pengalaman belajar yang sangat baik.',
        ]);

        $this->get(route('beranda'))
            ->assertOk()
            ->assertSee('Alumni Terbaru')
            ->assertSee('Pengalaman belajar yang sangat baik.');
    }
}
