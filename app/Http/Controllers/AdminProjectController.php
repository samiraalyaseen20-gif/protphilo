<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource on the admin dashboard.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.dashboard', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'title.required' => 'يرجى إدخال عنوان المشروع.',
            'category.required' => 'يرجى إدخال تصنيف المشروع.',
            'description.required' => 'يرجى إدخال تفاصيل المشروع.',
            'year.required' => 'يرجى إدخال سنة الإنجاز.',
            'image.required' => 'يرجى اختيار صورة للمشروع.',
            'image.image' => 'الملف المرفوع يجب أن يكون صورة.',
            'image.mimes' => 'صيغ الصور المسموح بها هي: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'الحد الأقصى لحجم الصورة هو 2 ميجابايت.',
        ]);

        $imagePath = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Ensure destination path exists
            $destinationPath = public_path('uploads/projects');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }
            
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/projects/' . $filename;
        }

        Project::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'year' => $request->year,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'تمت إضافة المشروع بنجاح!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'title.required' => 'يرجى إدخال عنوان المشروع.',
            'category.required' => 'يرجى إدخال تصنيف المشروع.',
            'description.required' => 'يرجى إدخال تفاصيل المشروع.',
            'year.required' => 'يرجى إدخال سنة الإنجاز.',
            'image.image' => 'الملف المرفوع يجب أن يكون صورة.',
            'image.mimes' => 'صيغ الصور المسموح بها هي: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'الحد الأقصى لحجم الصورة هو 2 ميجابايت.',
        ]);

        $imagePath = $project->image;
        if ($request->hasFile('image')) {
            // Delete old image if it exists in uploads/projects
            if ($project->image && !str_starts_with($project->image, 'assets/')) {
                $oldPath = public_path($project->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            $destinationPath = public_path('uploads/projects');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }
            
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/projects/' . $filename;
        }

        $project->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'year' => $request->year,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'تم تحديث المشروع بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete image file if it exists and is not a default asset
        if ($project->image && !str_starts_with($project->image, 'assets/')) {
            $filePath = public_path($project->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $project->delete();

        return redirect()->route('admin.dashboard')->with('success', 'تم حذف المشروع بنجاح!');
    }

    /**
     * Add a new image to a project.
     */
    public function storeImage(Request $request, Project $project)
    {
        $request->validate([
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'title'       => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ], [
            'image.required' => 'يرجى اختيار صورة.',
            'image.image'    => 'الملف يجب أن يكون صورة.',
            'image.max'      => 'الحد الأقصى لحجم الصورة هو 4 ميجابايت.',
        ]);

        $file     = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        $destinationPath = public_path('uploads/projects');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, true);
        }

        $file->move($destinationPath, $filename);

        ProjectImage::create([
            'project_id'  => $project->id,
            'image'       => 'uploads/projects/' . $filename,
            'title'       => $request->title,
            'description' => $request->description,
            'order'       => ProjectImage::where('project_id', $project->id)->max('order') + 1,
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'تمت إضافة الصورة بنجاح!')
            ->withFragment('project-' . $project->id);
    }

    /**
     * Delete a single project image.
     */
    public function destroyImage(ProjectImage $projectImage)
    {
        if ($projectImage->image && !str_starts_with($projectImage->image, 'assets/')) {
            $filePath = public_path($projectImage->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $projectId = $projectImage->project_id;
        $projectImage->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'تم حذف الصورة بنجاح!')
            ->withFragment('project-' . $projectId);
    }
}
