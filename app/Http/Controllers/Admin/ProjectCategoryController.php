<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|RedirectResponse
    {
        try {
            $categories = ProjectCategory::get();
            return view('admin.content.project-category.index', compact('categories'));
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
            ]);

            $data = $request->only(['title', 'description']);
            ProjectCategory::updateOrCreate(['id' => $request->id], $data);

            return redirect()->route('project-category.index')
                ->with('success', 'Project category created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectCategory $projectCategory)
    {
        try {
            return view('admin.content.project-category.index', compact('projectCategory'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectCategory $projectCategory)
    {
        try {
            $projectCategory->delete();
            return redirect()->route('projects.index')
                ->with('success', 'Project category delteed successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }
}
