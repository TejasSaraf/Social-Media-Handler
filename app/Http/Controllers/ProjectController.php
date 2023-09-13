<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Project;

class ProjectController extends Controller
{
    
    public function show(){
        
        return view('user/project_register');
}

public function store(Request $request){
   $project = new Project; 
   $project->name = $request->name;
   $project->slug = $request->uuid;
   $project->description = $request->description;
   $project->created_by_user_id = $request->user_id;
   $project->save();
   

    return redirect('user/project_register')->with('success', 'Record has been added successfully!');
}
}
