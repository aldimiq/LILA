<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Project;
class PageController extends Controller
{
    public function welcome(){
        $Projects = Project::where('status', 'published')
                ->orderBy('updated_at', 'desc')
                ->limit(3)
                ->get();
        return view('welcome',['currentRouteName'=> 'welcome','title'=> 'LILA - Layana Infini Lanskap'], compact('Projects'));
    }

    public function environmental(){
        $Projects = Project::where('status', 'published')
        ->orderBy('updated_at', 'desc')
        ->limit(3)
        ->get();
        return view('esa',['currentRouteName'=> 'environmental','title'=> 'Environmental and Social Assesment'], compact('Projects'));
    }

    public function data_analytics(){
        $Projects = Project::where('status', 'published')
        ->orderBy('updated_at', 'desc')
        ->limit(3)
        ->get();
        return view('dasd',['currentRouteName'=> 'data','title'=> 'Data Analytics and System Development'], compact('Projects'));
    }
    
    public function organizational(){
        $Projects = Project::where('status', 'published')
                ->orderBy('updated_at', 'desc')
                ->limit(3)
                ->get();
        return view('ocm',['currentRouteName'=> 'organizational','title'=> 'Organizational Change Management'], compact('Projects'));
    }

    public function capacity_building(){
        $Projects = Project::where('status', 'published')
        ->orderBy('updated_at', 'desc')
        ->limit(3)
        ->get();
        return view('cbta',['currentRouteName'=> 'capacity','title'=> 'Capacity Building and Technical Assistance'], compact('Projects'));
    }
    
    public function projects(){
        $Projects = Project::where('status', 'published')
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('projects',['currentRouteName'=> 'projects','title'=> 'Recent Projects'], compact('Projects'));
    }

    public function about(){
        $teams = Team::all();
        return view('about',['currentRouteName'=> 'about','title'=> 'About Us'], compact('teams'));
    }

    public function project_show(Project $project){
        return view('projects.show',['currentRouteName'=> 'projects','title'=> $project->title], compact('project'));
    }
    
}
