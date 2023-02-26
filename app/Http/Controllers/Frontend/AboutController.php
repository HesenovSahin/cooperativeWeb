<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Service;



class AboutController extends Controller
{
    public function index()
    {
        $teams= Team::orderBy('created_at','DESC')->take(3)->get();
        $services=Service::orderBy('created_at','DESC')->take(6)->get();
        return view('frontend.pages.about', compact('services','teams'));

    }
}
