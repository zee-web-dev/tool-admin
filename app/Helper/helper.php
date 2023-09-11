<?php

use App\Models\Section;
use App\Models\Setting;

/**
 * Get listing of a resource.
 *
 * @return array
 */
function getSetting($key = null)
{
    if ($key) {
        $setting = Setting::where('key', $key)->value('value');
        // dd($setting);
        return $setting;
    }
    $setting = Setting::pluck('value', 'key');
    return $setting;
}


/**
 * Get listing of a resource.
 *
 * @return array
 */
function getSection($key = null)
{
    if ($key) {
        $section = Section::where('key', $key)->value('value');
        return $section;
    }
    $section = Section::pluck('value', 'key');
    return $section;
}
