<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categorylist()
    {

        return Category::where('usd_id', '=', 0)->with('children')->get();
    }
 public static function getsetting()
    {

        return Setting::first();
    }

 public function index()
    {
        $setting= Setting::first();

        return view("front.home",['setting'=>$setting , 'page'=>'home']);
    }
  public function aboutus()
    {
        $setting= Setting::first();

        return view('front.aboutus',['setting'=>$setting]);

    }

    public function faq()
    {
        return view("front.faq");
    }
       public function references()
    {
        $setting= Setting::first();

        return view('front.references',['setting'=>$setting]);

    }
       public function contact()
    {
        $setting= Setting::first();

        return view('front.contact',['setting'=>$setting]);
    }

       public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name= $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success', 'sended new message successfully , thank you');
    }



  public function login()
    {
        return view("admin.login");
    }

    public function logincheck(Request $request)
    {

        if($request->isMethod('post')){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'the provided cerdentials do not match our records'
            ]);
        } else{
            return view("admin.login");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
