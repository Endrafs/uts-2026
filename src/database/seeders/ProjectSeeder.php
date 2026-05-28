<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Website Portofolio Dinamis',
                'description' => 'Website portofolio berbasis Laravel yang kontennya dapat diubah dari admin panel Filament.',
            ],
            [
                'title' => 'Sistem Pesan Visitor',
                'description' => 'Form contact us yang menyimpan nama, email, subjek, dan pesan visitor ke database.',
            ],
            [
                'title' => 'Admin Panel Konten',
                'description' => 'Panel admin untuk mengelola biodata, foto profil, daftar project, dan pesan masuk.',
            ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate(
                ['slug' => Str::slug($project['title'])],
                [...$project, 'is_active' => true]
            );
        }
    }
}
