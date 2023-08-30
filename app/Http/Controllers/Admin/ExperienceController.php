<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
            $experiences = Experience::latest()->get();
            return view('admin.content.experience.index', compact('experiences'));
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
            return view('admin.content.experience.create');
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
                'company' => 'required',
                'link' => 'required',
                'from' => 'required',
                'location' => 'required',
            ]);

            $data = $request->only([
                'title', 'company', 'description', 'link', 'location', 'status', 'from',
                'to'
            ]);
            Experience::create($data);

            return redirect()->route('resume.experiences.index')
                ->with('success', 'Experience created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        try {
            return view('admin.content.experience.edit', compact('experience'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        try {
            $request->validate([
                'title' => 'required',
                'company' => 'required',
                'link' => 'required',
                'from' => 'required',
                'location' => 'required',
            ]);

            $data = $request->only([
                'title', 'company', 'description', 'link', 'location', 'status', 'from',
                'to'
            ]);
            $experience->update($data);

            return redirect()->route('resume.experiences.index')
                ->with('success', 'Experience updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        try {
            $experience->delete();
            return redirect()->route('resume.experiences.index')
                ->with('success', 'Experience delteed successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }
}
