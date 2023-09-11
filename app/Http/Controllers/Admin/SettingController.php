<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
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
            $setting = Setting::get()->pluck('value', 'key');
            return view('admin.content.settings.index', compact('setting'));
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
                'settings' => 'required|array'
            ]);

            foreach ($request->settings as $key => $value) {
                if (file_exists($value)) {
                    $this->deleteImage($key);
                    $name = time() . '_' . $value->getClientOriginalName();
                    $value = $value->move('upload/images/', $name);
                }
                Setting::updateOrCreate([
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
        $image = Setting::where('key', $key)->value('value');
        $path = public_path($image);
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
