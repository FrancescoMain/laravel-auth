<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller
{
    //index
    public function home() {

        $projects = Project :: all();

        return view('pages.home', compact('projects'));
    }

    //show
    public function projectShow(Project $project){

        return view('pages.projectShow', compact('project'));

    }

}
