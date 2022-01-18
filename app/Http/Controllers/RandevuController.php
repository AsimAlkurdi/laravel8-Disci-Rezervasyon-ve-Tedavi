<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Process;
use App\Models\Randevu;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Randevu::where('usersid','=',Auth::user()->id)->get();
        return view('front.user_randevus',['datalist'=>$datalist ]);
    }

    public function list($status)
    {
        $datalist = Randevu::where('usersid','=',Auth::user()->id)->where('status',$status)->get();
        return view('front.user_randevus',['datalist'=>$datalist ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Treatment::all();
        $datalists = Doctor::all();

        return view('front.user_make_appointment',['datalist'=>$datalist ,'datalists'=>$datalists]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Randevu();
        $data->treatmentid= $request->input('treatmentid');
        $data->name = $request->input('name');
        $data->usersid = Auth::id();
        $data->time = $request->input('time');
        $data->Date = $request->input('Date');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->doctorid =  $request->input('doctorid');
        $data->message = $request->input('message');
        $data->save();

        $dataprocss = new Process();
        $dataprocss->treatmentid = $data->treatmentid;
        $dataprocss->usersid = Auth::id();
        $dataprocss->randevuid = $data->id;
        $dataprocss->price = $data->treatment->price;
        $dataprocss->doctorid =  $data->doctorid;
        $dataprocss->save();

      return redirect()->route('user_randevu')->with('success', 'ADDED successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu ,$id)
    {
        $datalist = Process::where('usersid','=',Auth::user()->id)->where('randevuid','=',$id)->get();
        return view('front.user_randevus_details',['datalist'=>$datalist ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu, $id)
    {
        $data = Randevu::find($id);
        $datalist = Treatment::all();
        $datalists = Doctor::all();
        return view('front.user_edit_appointment',['data' =>$data,'datalist' =>$datalist,'datalists' =>$datalists]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu ,$id)
    {
        DB::table('Randevus')
            ->where('id',$id)
            ->update([
                'treatmentid' => $request->treatmentid,
                'name' => $request->name,
                'time' => $request->time,
                'Date' => $request->Date,
                'email' => $request->email,
                'phone' => $request->phone,
                'doctorid' => $request->doctorid,
                'usersid' => Auth::id(),
                'message' => $request->message,

            ]);
        return redirect()->route('user_randevu')->with('success', 'Updeted successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }
}
