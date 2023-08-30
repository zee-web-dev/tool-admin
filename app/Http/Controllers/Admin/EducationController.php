<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EducationController extends Controller
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
            $educations = Education::latest()->get();
            return view('admin.content.education.index', compact('educations'));
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
            return view('admin.content.education.create');
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
                'institute' => 'required',
                'link' => 'required',
                'from' => 'required',
                'location' => 'required',
            ]);

            $data = $request->only([
                'title', 'institute', 'description', 'link', 'location', 'status', 'from',
                'to'
            ]);
            Education::create($data);

            return redirect()->route('resume.education.index')
                ->with('success', 'Education created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        try {
            return view('admin.content.education.edit', compact('education'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        try {
            $request->validate([
                'title' => 'required',
                'institute' => 'required',
                'link' => 'required',
                'from' => 'required',
                'location' => 'required',
            ]);

            $data = $request->only([
                'title', 'institute', 'description', 'link', 'location', 'status', 'from',
                'to'
            ]);
            $education->update($data);

            return redirect()->route('resume.education.index')
                ->with('success', 'Education updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        try {
            $education->delete();
            return redirect()->route('resume.education.index')
                ->with('success', 'Education delteed successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }
}
