<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Portofolio');
            $table->string('navbar_name')->default('Farel');
            $table->string('hero_name')->default('Saelendra Farell Syahbana');
            $table->string('hero_title')->nullable();
            $table->text('bio')->nullable();
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('experience_years')->default('1+');
            $table->string('experience_label')->default('Tahun Belajar');
            $table->string('projects_count')->default('3+');
            $table->string('projects_label')->default('Proyek');
            $table->string('skills_count')->default('5+');
            $table->string('skills_label')->default('Skill');
            $table->string('work_section_title')->default('Apa yang Saya Kerjakan');
            $table->text('work_section_subtitle')->nullable();
            $table->string('contact_section_title')->default('Bekerja Sama');
            $table->text('contact_section_subtitle')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('github_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
