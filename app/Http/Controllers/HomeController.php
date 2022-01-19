<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categorylist()
    {

        return  Category::with('children')->get();
    }
 public static function getsetting()
    {

        return Setting::first();
    }


 public static function countreview($id)
    {

       return Review::where('treatmentid', $id)->count();
    }

 public function index()
    {
        $datalistss = Treatment::all();
        $datalistsss = Treatment::select('id','title','image','price','description')->latest()->take(3)->get();
        $datalists = Doctor::all();
        $setting= Setting::first();
        $slider = Treatment::select('id','title','image','price','slug')->limit(4)->get();
        $data=[
            'setting'=>$setting ,
            'slider'=>$slider,
            'datalists'=>$datalists,
            'datalistss'=>$datalistss,
            'datalistsss'=>$datalistsss,

            'page'=>'home',
        ];
        return view("front.home",$data);
    }

    public function appointment($id)
    {
        //$datalist= DB::select ('select * FROM images where treatment_id=?',[$id]);
        $datalist=Image::where('treatment_id', $id)->get();
        $data= Treatment::find($id);
        $review = Review::where('treatmentid', $id)->get();
        return view("front.treatmentdetails",['data'=>$data ,'datalist'=>$datalist,'review'=>$review ]);

    }

    public function makeappointment($id)
    {
        echo "add appointment <br>";
        $data= Treatment::find($id);
        print_r($data);
        exit();
    }



    public function categorytreatment($id)
    {
        $setting= Setting::first();
        $datalist =Treatment::select('id','title','price')->limit(6)->get();
        $datalists =Treatment::latest()->take(5)->get();
        $data= Treatment::where('categoryid', $id)->get();
        $datas=[
            'setting'=>$setting ,
            'datalist'=>$datalist,
            'datalists'=>$datalists,
            'data'=>$data,
            'page'=>'home',
        ];


        return view("front.categorytreatment",$datas);
    }

    public function aboutus()
    {
        $setting= Setting::first();

        return view('front.aboutus',['setting'=>$setting]);

    }

    public function faq()
    {
        $setting= Setting::first();
        $datalist =Faq::all()->sortBy('position');
        return view("front.faq",['datalist'=>$datalist ,'setting'=>$setting]);
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
