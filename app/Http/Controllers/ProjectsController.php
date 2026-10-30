<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\projects;
use Database\Factories\projectsfactroy;
class ProjectsController extends Controller
{
    //
    function ViewPage(){
        $data = projects::cursorPaginate(10);
        return view('Projects', ['Projects' => $data]);
    }
    function create(){
        projects::factory(100)->create();
        return redirect('projects');
    }
}
