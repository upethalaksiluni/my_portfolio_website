<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SkillController extends Controller
{
    public function index(): Response
    {
        $skills = Skill::ordered()
            ->get()
            ->groupBy('category');

        return Inertia::render('Skills', [
            'skills' => $skills,
            'meta' => [
                'title' => 'Skills - H.T. Upetha Laksiluni',
                'description' => 'Technical skills and expertise of H.T. Upetha Laksiluni in programming languages, frameworks, and development tools.',
            ]
        ]);
    }

    // API endpoint for external integrations
    public function apiIndex(Request $request)
    {
        $skills = Skill::ordered();

        if ($request->has('category')) {
            $skills = $skills->byCategory($request->category);
        }

        if ($request->has('featured')) {
            $skills = $skills->featured();
        }

        $skillsData = $skills->get();

        if ($request->has('group_by_category')) {
            $skillsData = $skillsData->groupBy('category');
        }

        return response()->json([
            'success' => true,
            'data' => $skillsData,
            'categories' => Skill::distinct()->pluck('category'),
        ]);
    }
}