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

    //DELETE
    public function projectDelete(Project $project){

        $project -> delete();

        return redirect() -> route('home');

    }

    //create & store
    public function projectCreate() {

	return view('pages.projectCreate');
}

}
