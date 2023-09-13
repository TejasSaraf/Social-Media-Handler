<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Project;

class Usercontroller extends Controller
{
    public function index(){
        return view('user/home');
    }
    /**public function index(){
        return view('user/userhome');
    }*/
    public function uploadpost(){
        return view('user/uploadpost');
    }
    public function notifications(){
        return view('user/notifications');
    }
    public function project(){
        $projects = Project::all();
        return view('user/project')->with('projects', $projects);
    }
    public function help(){
        return view('user/help');
    }
    public function profile(){
        return view('user/profile');
    }

    public function Upgrade() {
        return view('Upgrade');
    }
    public function Cancel() {
        return view('Cancel');
    }


}
