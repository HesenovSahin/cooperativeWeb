<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $blogs= Blog::paginate(3);
        $category= Category::get();
        return view('frontend.pages.blog_detail',compact('category','blogs'));
    }
}
