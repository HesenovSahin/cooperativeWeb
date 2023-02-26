<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class ServiceV2Controller extends Controller
{
    public function index()
    {
        $services=Service::get();
        return view('frontend.includes.service_v2',compact('services'));
    }
}
