<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): View
    {
        $skills = Skill::active()->orderBy('order')->get();
        $projects = Project::with('category')->active()->orderBy('order')->get();
        $experience = Experience::active()->orderBy('order')->get();
        $education = Education::active()->orderBy('order')->get();
        return view('website.index', compact('skills', 'projects', 'education', 'experience'));
    }

    public function contact(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validateData);

        return redirect()->back()->with('success', "Thanks for contact us. We'll reply you soon.");
    }
}
