<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Team;
use App\Http\Requests\Team\StoreRequest;
use App\Http\Requests\Team\UpdateRequest;



class TeamController extends Controller
{

    public function index(): Response
    {
        return response()->view('admin/team.index', [
            'teams' => Team::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    public function create(): Response
    {
        return response()->view('admin/team.form');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('photo')) {
            // put image in the public storage
            
            $filePath = Storage::disk('public')->put('team', request()->file('photo'));
            $validated['photo'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Team::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Team created successfully!');
            return redirect()->route('team.index');
        }

        return abort(500);
    }

    public function show(string $id): Response
    {
        return response()->view('admin/team.show', [
            'team' => Team::findOrFail($id),
        ]);
    }

    public function edit(string $id): Response
    {
        return response()->view('admin/team.form', [
            'team' => Team::findOrFail($id),
        ]);
    }

    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $team = Team::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('photo')) {
            // delete image
            Storage::disk('public')->delete($team->photo);
            
            $filePath = Storage::disk('public')->put('team', request()->file('photo'), 'public');
            $validated['photo'] = $filePath;

            // Simpan path file ke database
            $validated['photo'] = $filePath;
        }

        $update = $team->update($validated);

        if($update) {
            session()->flash('notif.success', 'Team updated successfully!');
            return redirect()->route('team.index');
        }

        return abort(500);
        
    }

    public function destroy(string $id): RedirectResponse
    {
        $team = Team::findOrFail($id);

        Storage::disk('public')->delete($team->photo);
        
        $delete = $team->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Team deleted successfully!');
            return redirect()->route('team.index');
        }

        return abort(500);
    }
    
}
