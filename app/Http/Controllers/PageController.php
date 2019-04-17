<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Experience;

class PageController extends Controller
{
    public function preview($user_id)
    {
        $id = (int) $user_id;

        $user = User::find($user_id);
        
        $experiences = $user->experiences()->orderBy('begin', 'asc')->get();
        $educations = $user->educations()->orderBy('begin', 'asc')->get();
        $skills = $user->skills()->get();
        $interests = $user->interests()->get();

        return view('resume.preview', compact('user', 'experiences', 'educations', 'skills', 'interests'));
    }
}
