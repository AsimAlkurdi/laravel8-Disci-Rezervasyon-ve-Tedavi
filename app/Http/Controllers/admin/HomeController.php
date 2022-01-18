<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin');
    }


    public function index()
    {
        return view("admin.home");
    }


}
