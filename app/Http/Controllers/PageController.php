<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showEnvironment(){
        // Fetch other data needed for the view
        return view('esa',['currentRouteName'=> 'Environment']);
    }

}
