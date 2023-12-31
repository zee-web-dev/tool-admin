<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SkillController extends Controller
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
            $skills = Skill::orderBy('order')->get();
            return view('admin.content.skills.index', compact('skills'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $data = $request->only(['name', 'value', 'status']);
            Skill::updateOrCreate(['id' => $request->id], $data);

            return redirect()->route('resume.skills.index')
                ->with('success', 'Skill created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        try {
            return view('admin.content.skills.index', compact('skill'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        try {
            $skill->delete();
            return redirect()->route('projects.index')
                ->with('success', 'Skill delteed successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }
}
