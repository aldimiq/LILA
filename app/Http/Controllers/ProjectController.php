<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Http\Requests\Project\StoreRequest;
use App\Http\Requests\Project\UpdateRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response{
        return response()->view('admin/project.index', [
            'project' => Project::orderBy('updated_at', 'desc')->get(),
            

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response{
        return response()->view('admin/project.form', [
            'project_category' => ProjectCategory::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse{
        $validated = $request->validated();

        if ($request->hasFile('featured_image')) {
            // put image in the public storage
            
            $filePath = Storage::disk('public')->put('projects', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Project::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Project created successfully!');
            return redirect()->route('project.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id): Response{
        return response()->view('admin/project.show', [
            'project' => Project::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response{
        return response()->view('admin/project.form', [
            'project' => Project::findOrFail($id),
            'project_category' => ProjectCategory::orderBy('updated_at', 'desc')->get(),
        ]);
    }
    
    public function publish(Request $request, $id){
        $project = Project::find($id);

        if ($project) {
            $project->status = 'Published'; // Update status to 'Published'
            $project->save();

            return redirect()->back()->with('success', 'Project Published successfully!');
        } else {
            return redirect()->back()->with('error', 'Project not found!');
        }
    }

    public function unpublish(Request $request, $id){
        $project = Project::find($id);

        if ($project) {
            $project->status = 'Draft'; // Update status to 'Draft'
            $project->save();

            return redirect()->back()->with('success', 'Project Unpublished successfully!');
        } else {
            return redirect()->back()->with('error', 'Project not found!');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse{
        $project = Project::findOrFail($id);

        Storage::disk('public')->delete($project->featured_image);
        $delete = $project->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Project deleted successfully!');
            return redirect()->route('project.index');
        }

        return abort(500);
    }
    
}
