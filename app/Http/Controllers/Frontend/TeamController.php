<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    public function index()
    {
        $teams= Team::orderBy('created_at','DESC')->take(3)->get();
        return view('frontend.pages.team', compact('teams'));
    }
}
