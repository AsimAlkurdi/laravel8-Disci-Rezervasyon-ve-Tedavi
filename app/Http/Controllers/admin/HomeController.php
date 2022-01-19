<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Randevu;
use App\Models\Review;
use App\Models\Treatment;
use http\Client\Curl\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin');
    }


    public function index()
    {
        $randevu = Randevu::latest()->take(6)->get();
        $message=Message::latest()->take(6)->get();
        $comment = Review::latest()->take(6)->get();
        $treatment= Treatment::latest()->take(6)->get();
        $doctor = Doctor::latest()->take(6)->get();
        $user = \App\Models\User::latest()->take(6)->get();


        $data=[
            'randevu'=>$randevu ,
            'message'=>$message,
            'comment'=>$comment,
            'treatment'=>$treatment,
            'doctor'=>$doctor,
            'user'=>$user,

            'page'=>'home',
        ];
        return view("admin.home",$data);
    }


}
