<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('profiles')) {
            return;
        }

        Schema::table('profiles', function (Blueprint $table) {
            $columns = [
                'site_name' => fn () => $table->string('site_name')->default('Portofolio'),
                'navbar_name' => fn () => $table->string('navbar_name')->default('Farel'),
                'hero_name' => fn () => $table->string('hero_name')->default('Saelendra Farell Syahbana'),
                'hero_title' => fn () => $table->string('hero_title')->nullable(),
                'bio' => fn () => $table->text('bio')->nullable(),
                'description' => fn () => $table->text('description')->nullable(),
                'photo' => fn () => $table->string('photo')->nullable(),
                'experience_years' => fn () => $table->string('experience_years')->default('1+'),
                'experience_label' => fn () => $table->string('experience_label')->default('Tahun Belajar'),
                'projects_count' => fn () => $table->string('projects_count')->default('3+'),
                'projects_label' => fn () => $table->string('projects_label')->default('Proyek'),
                'skills_count' => fn () => $table->string('skills_count')->default('5+'),
                'skills_label' => fn () => $table->string('skills_label')->default('Skill'),
                'work_section_title' => fn () => $table->string('work_section_title')->default('Apa yang Saya Kerjakan'),
                'work_section_subtitle' => fn () => $table->text('work_section_subtitle')->nullable(),
                'contact_section_title' => fn () => $table->string('contact_section_title')->default('Bekerja Sama'),
                'contact_section_subtitle' => fn () => $table->text('contact_section_subtitle')->nullable(),
                'email' => fn () => $table->string('email')->nullable(),
                'phone' => fn () => $table->string('phone')->nullable(),
                'address' => fn () => $table->string('address')->nullable(),
                'instagram_url' => fn () => $table->string('instagram_url')->nullable(),
                'linkedin_url' => fn () => $table->string('linkedin_url')->nullable(),
                'github_url' => fn () => $table->string('github_url')->nullable(),
            ];

            foreach ($columns as $column => $callback) {
                if (! Schema::hasColumn('profiles', $column)) {
                    $callback();
                }
            }
        });
    }

    public function down(): void
    {
        // Data profile tidak dihapus otomatis agar aman saat rollback lokal.
    }
};
