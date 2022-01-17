<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::all();
        return view('admin.doctors',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('admin.doctoradd',['data' =>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfile/', $name);
        }
        $data = new Doctor();
        $data->name= $request->input('name');
        $data->specialty = $request->input('specialty');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->usersid =  $request->input('usersid');
        $data->status = $request->input('status');

        $data->image = $name;

        $data->save();

        return redirect('admin/doctors')->with('success', 'added new Doctor successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor, $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor,$id)
    {
        $data = Doctor::find($id);
        $datas = User::all();
        return view('admin.doctoredit',['data' =>$data,'datas' =>$datas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor,$id)
    {
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfile/', $name);
        }

        DB::table('doctors')
            ->where('id',$id)
            ->update([
                'name' => $request->name,
                'specialty' => $request->specialty,
                'email' => $request->email,
                'phone' => $request->phone,
                'usersid' => $request->usersid,
                'status' => $request->status,
                'image' => $name

            ]);


        return redirect('admin/doctors')->with('success', 'updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor,$id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect('admin/doctors')->with('success', 'deleted successfully');
    }
}
