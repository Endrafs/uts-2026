<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\Message;
use Illuminate\Database\Seeder;

class PersonalAndMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personal = Personal::create([
            'name' => 'Saelendra Farell Syahbana',
            'email' => 'saelendra@example.com',
            'phone' => '+62 812-3456-7890',
            'address' => 'Jakarta, Indonesia',
            'birthdate' => '2003-01-01',
            'avatar_url' => null,
            'bio' => 'Mahasiswa Teknik Informatika di Fakultas Ilmu Komputer Universitas Esa Unggul, dengan minat pada pengembangan web, sistem informasi, dan aplikasi interaktif.',
        ]);

        Message::create([
            'personal_id' => $personal->id,
            'title' => 'Portofolio — Web Developer',
            'content' => "Saya mengerjakan beberapa proyek: \n- Sistem manajemen inventori dengan Laravel dan Livewire.\n- Dashboard admin menggunakan Filament untuk manajemen pengguna dan laporan.\n- API publik yang ter-autentikasi menggunakan Sanctum.\n\nKeahlian: Laravel, PHP, MySQL, Livewire, Filament, Docker. Kontak: saya@example.com",
        ]);
    }
}
