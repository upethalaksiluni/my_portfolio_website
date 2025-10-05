<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        $projects = Project::active()
            ->ordered()
            ->get();

        return Inertia::render('Projects', [
            'projects' => $projects,
            'meta' => [
                'title' => 'Projects - H.T. Upetha Laksiluni',
                'description' => 'Explore projects by H.T. Upetha Laksiluni including web applications, mobile apps, and software solutions.',
            ]
        ]);
    }

    public function show(Project $project): Response
    {
        if ($project->status !== 'active') {
            abort(404);
        }

        $relatedProjects = Project::active()
            ->where('id', '!=', $project->id)
            ->ordered()
            ->limit(3)
            ->get();

        return Inertia::render('ProjectDetail', [
            'project' => $project,
            'relatedProjects' => $relatedProjects,
            'meta' => [
                'title' => $project->title . ' - Project Details',
                'description' => $project->description,
            ]
        ]);
    }

    // API endpoint for external integrations
    public function apiIndex(Request $request)
    {
        $projects = Project::active()->ordered();

        if ($request->has('featured')) {
            $projects = $projects->featured();
        }

        if ($request->has('limit')) {
            $projects = $projects->limit($request->limit);
        }

        return response()->json([
            'success' => true,
            'data' => $projects->get(),
            'total' => Project::active()->count(),
        ]);
    }
}