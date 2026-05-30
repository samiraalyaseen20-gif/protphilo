<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ResumeSetting;
use Illuminate\Http\Request;

class AdminResumeController extends Controller
{
    /**
     * Show the edit page for resume and experiences.
     */
    public function edit()
    {
        $settings = ResumeSetting::firstOrCreate([]);
        $experiences = Experience::orderBy('sort_order', 'asc')->orderBy('id', 'asc')->get();

        return view('admin.resume.edit', compact('settings', 'experiences'));
    }

    /**
     * Update the academic certificate and skills settings.
     */
    public function updateSettings(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'graduation_year' => 'required|string|max:255',
            'languages' => 'nullable|string',
            'skills' => 'nullable|string',
        ]);

        $settings = ResumeSetting::firstOrCreate([]);
        $settings->update([
            'degree' => $request->degree,
            'university' => $request->university,
            'graduation_year' => $request->graduation_year,
            'languages' => $request->languages,
            'skills' => $request->skills,
        ]);

        return redirect()->back()->with('success', 'تم تحديث إعدادات الشهادة والمهارات بنجاح.');
    }

    /**
     * Store a new experience.
     */
    public function storeExperience(Request $request)
    {
        $request->validate([
            'year_range' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'responsibilities' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        Experience::create([
            'year_range' => $request->year_range,
            'title' => $request->title,
            'company' => $request->company,
            'icon' => $request->icon,
            'responsibilities' => $request->responsibilities,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->back()->with('success', 'تم إضافة الخبرة المهنية بنجاح.');
    }

    /**
     * Update an existing experience.
     */
    public function updateExperience(Request $request, Experience $experience)
    {
        $request->validate([
            'year_range' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'responsibilities' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        $experience->update([
            'year_range' => $request->year_range,
            'title' => $request->title,
            'company' => $request->company,
            'icon' => $request->icon,
            'responsibilities' => $request->responsibilities,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->back()->with('success', 'تم تحديث الخبرة المهنية بنجاح.');
    }

    /**
     * Destroy an experience.
     */
    public function destroyExperience(Experience $experience)
    {
        $experience->delete();

        return redirect()->back()->with('success', 'تم حذف الخبرة المهنية بنجاح.');
    }
}
