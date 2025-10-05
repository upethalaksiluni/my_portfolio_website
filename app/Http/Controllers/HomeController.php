<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $featuredProjects = Project::active()
            ->featured()
            ->ordered()
            ->limit(3)
            ->get();

        $featuredSkills = Skill::featured()
            ->ordered()
            ->get()
            ->groupBy('category');

        return Inertia::render('Home', [
            'featuredProjects' => $featuredProjects,
            'featuredSkills' => $featuredSkills,
            'meta' => [
                'title' => 'H.T. Upetha Laksiluni - Software Engineer Portfolio',
                'description' => 'Portfolio of H.T. Upetha Laksiluni, a dedicated software engineer specializing in mobile, web, and game development with hands-on experience in live projects.',
                'keywords' => 'software engineer, web development, mobile development, laravel, vue.js, portfolio',
            ]
        ]);
    }

    public function about(): Response
    {
        $allSkills = Skill::ordered()
            ->get()
            ->groupBy('category');

        return Inertia::render('About', [
            'skills' => $allSkills,
            'meta' => [
                'title' => 'About - H.T. Upetha Laksiluni',
                'description' => 'Learn more about H.T. Upetha Laksiluni\'s background, education, and professional journey in software engineering.',
            ]
        ]);
    }
}