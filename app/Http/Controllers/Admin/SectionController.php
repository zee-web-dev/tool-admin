<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|RedirectResponse
    {
        try {
            $section = Section::get()->pluck('value', 'key');
            return view('admin.content.section.index', compact('section'));
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }


    /**
     * Store a listing of the resource.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'sections' => 'required|array'
            ]);

            foreach ($request->sections as $key => $value) {
                if (file_exists($value)) {
                    $this->deleteImage($key);
                    $name = time() . '_' . $value->getClientOriginalName();
                    $value = $value->move('upload/images/', $name);
                }
                Section::updateOrCreate([
                    'key' => $key
                ], [
                    'value' => $value,
                ]);
            }

            return redirect()->back()
                ->with('success', 'Settings saved successfully.');
        } catch (\Throwable $th) {
            return back()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    public function deleteImage($key)
    {
        $image = Section::where('key', $key)->value('value');
        $path = public_path($image);
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
