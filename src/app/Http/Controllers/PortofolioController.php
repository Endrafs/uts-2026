<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;

class PortofolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $projects = Project::query()
            ->where('is_active', true)
            ->latest()
            ->get();

        return view('welcome', compact('profile', 'projects'));
    }
}
