<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Randevu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Randevu::all();
        return view('admin.randevus',['data' =>$data]);
    }
    public function list($status)
    {
        $data = Randevu::where('status',$status)->get();
        return view('admin.randevus',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu, $id)
    {
        $datalist = Process::where('randevuid','=',$id)->get();
        return view('admin.randevus_details',[ 'datalist'=>$datalist ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        return view('admin.randevuedit',['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        $data->status=$request->input('status');
        $data->note=$request->input('note');
        $data->save();
        return redirect()->route('admin_randevu')->with('success', 'Updeted successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function updateprocess(Request $request, Randevu $randevu,$id)
    {
        $data = Process::find($id);
        $data->status=$request->input('status');
        $data->note=$request->input('note');
        $data->payment=$request->input('payment');
        $data->save();
        return redirect()->back()->with('success', 'Updeted successfully');
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
        return redirect()->route('admin_randevu')->with('success', 'Deleted successfully');
    }
}
