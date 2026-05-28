<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Portofolio Farel',
                'navbar_name' => 'Farel',
                'hero_name' => 'Saelendra Farell Syahbana',
                'hero_title' => 'Mahasiswa Teknik Informatika',
                'bio' => 'Saya tertarik dalam pengembangan website, sistem informasi, dan aplikasi berbasis Laravel.',
                'description' => 'Website ini dibuat dinamis agar biodata, daftar pekerjaan, dan pesan visitor dapat dikelola lewat admin panel.',
                'experience_years' => '1+',
                'experience_label' => 'Tahun Belajar',
                'projects_count' => '3+',
                'projects_label' => 'Proyek',
                'skills_count' => '5+',
                'skills_label' => 'Skill',
                'work_section_title' => 'Apa yang Saya Kerjakan',
                'work_section_subtitle' => 'Daftar project ini dapat ditambah, diubah, disembunyikan, atau dihapus dari admin panel.',
                'contact_section_title' => 'Bekerja Sama',
                'contact_section_subtitle' => 'Isi form berikut untuk mengirim pesan. Pesan akan masuk ke database dan tampil di admin panel.',
                'email' => 'hello@example.com',
                'phone' => '+62 812-3456-7890',
                'address' => 'Jakarta, Indonesia',
            ]
        );
    }
}
