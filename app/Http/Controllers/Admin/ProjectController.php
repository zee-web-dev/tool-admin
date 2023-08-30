<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|RedirectResponse
    {
        try {
            $projects = Project::with(['category'])->orderBy('order')->get();
            return view('admin.content.projects.index', compact('projects'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $categories = ProjectCategory::active()->get();
            return view('admin.content.projects.create', compact('categories'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'project_category_id' => 'required',
            ]);

            $data = $request->only(['title', 'image', 'description', 'link', 'project_category_id']);
            Project::create($data);

            return redirect()->route('projects.index')
                ->with('success', 'Project created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        try {
            $categories = ProjectCategory::active()->get();
            return view('admin.content.projects.edit', compact('project', 'categories'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        try {
            $request->validate([
                'title' => 'required',
                'project_category_id' => 'required',
            ]);

            $data = $request->only(['title', 'image', 'description', 'link', 'project_category_id']);
            $project->update($data);

            return redirect()->route('projects.index')
                ->with('success', 'Project updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();
            return redirect()->route('projects.index')
                ->with('success', 'Project delteed successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }
}
