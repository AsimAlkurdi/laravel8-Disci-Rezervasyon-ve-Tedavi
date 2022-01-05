<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $setting= Setting::first();

        return view("front.home",['setting'=>$setting]);
    }
  public function aboutus()
    {
        return view("front.aboutus");

    }

    public function faq()
    {
        return view("front.aboutus");
    }
       public function references()
    {
        return view("front.aboutus");
    }
       public function contact()
    {
        return view("front.aboutus");
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
