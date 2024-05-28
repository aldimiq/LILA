<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\ProjectCategory;
use App\Http\Requests\ProjectCategory\StoreRequest;
use App\Http\Requests\ProjectCategory\UpdateRequest;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('admin/project/category.index', [
            'project_category' => ProjectCategory::orderBy('updated_at', 'desc')->get(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('admin/project/category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // insert only requests that already validated in the StoreRequest
        $create = ProjectCategory::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Project Category created successfully!');
            return redirect()->route('project_category.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response{
        return response()->view('admin/project/category.show', [
            'project_category' => ProjectCategory::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response{
        return response()->view('admin/project/category.form', [
            'project_category' => ProjectCategory::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse{
        $project_category = ProjectCategory::findOrFail($id);
        $validated = $request->validated();

        $update = $project_category->update($validated);

        if($update) {
            session()->flash('notif.success', 'Project Category updated successfully!');
            return redirect()->route('project_category.index');
        }

        return abort(500);
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $project_category = ProjectCategory::findOrFail($id);

        $delete = $project_category->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Project Category deleted successfully!');
            return redirect()->route('project_category.index');
        }

        return abort(500);
    }
}
