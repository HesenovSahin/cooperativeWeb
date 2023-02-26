<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Service;
use App\Models\Chart;
use App\Models\Blog;
use App\Models\Category;








class HomeController extends Controller
{
    public function index(){
        $sliders= Slider::orderBy('created_at','DESC')->take(3)->get();
        $teams= Team::orderBy('created_at','DESC')->take(3)->get();
        $portfolios = Portfolio::orderBy('created_at','DESC')->take(6)->get();
        $categories= Category::get();
        $charts= Chart::orderBy('created_at','DESC')->take(1)->get();
        $blogs= Blog::orderBy('created_at','DESC')->take(2)->get();
        $services=Service::orderBy('created_at','DESC')->take(6)->get();

        return view('frontend.pages.home', compact('sliders','teams','portfolios','services','charts','blogs','categories'));
    }
}
