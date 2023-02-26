<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portfolio;


class GalleryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $portfolios = Portfolio::orderBy('created_at','DESC')->take(6)->get();
        return view('frontend/pages/gallery', compact('categories', 'portfolios'));
    }
    
}
