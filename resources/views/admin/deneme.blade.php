<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($treatment_id)
    {
        $data = DB::select ('select * FROM treatments where Id=?',[$treatment_id]);
        $image = DB::select ('select * FROM images where treatment_id=?',[$treatment_id]);
        return view("admin.imageadd",["data"=>$data],["image"=>$image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$treatment_id)
    {
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfile/', $name);
        }


        DB::table('images')->insert([
            [ 'title' => $request->input('title'),
                'treatment_id' => $treatment_id ,
                'image' => $name
            ]
        ]);
        return redirect()->route('admin_image_add',['treatment_id'=>$treatment_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$treatment_id)
    {
        DB::select ('DELETE FROM images WHERE Id=?',[$id]);
        return redirect()->route('admin_image_add',['treatment_id'=>$treatment_id])->with('success', 'deleted successfully');    }
}
