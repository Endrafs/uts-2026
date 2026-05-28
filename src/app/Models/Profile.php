<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'navbar_name',
        'hero_name',
        'hero_title',
        'bio',
        'description',
        'photo',
        'experience_years',
        'experience_label',
        'projects_count',
        'projects_label',
        'skills_count',
        'skills_label',
        'work_section_title',
        'work_section_subtitle',
        'contact_section_title',
        'contact_section_subtitle',
        'email',
        'phone',
        'address',
        'instagram_url',
        'linkedin_url',
        'github_url',
    ];
}
