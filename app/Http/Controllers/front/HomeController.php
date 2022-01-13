<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("front.home");
    }
    public function aboutus()
    {
        $setting= Setting::first();

        return view('front.aboutus',['setting'=>$setting]);


    }
}
