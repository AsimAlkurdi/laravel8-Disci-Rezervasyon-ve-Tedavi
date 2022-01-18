<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatment= Treatment::all();
        return view("admin.treatment",["treatment"=>$treatment ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $data = Category::with('children')->get();
        return view("admin.treatmentadd",["data"=>$data ,"category"=>$category]);

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
        $data = new Treatment;
        $data->title= $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->categoryid = $request->input('categoryid');
        $data->usersid = Auth::id();
        $data->status = $request->input('status');
        $data->price = $request->input('price');
        $data->image = $name;

        $data->save();

        return redirect('admin/treatments')->with('success', 'added new treatment successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment, $id)
    {
        $data = Treatment::find($id);
        $datalist = Category::with('children')->get();
        return view("admin.treatmentedit",["data"=>$data ,"datalist"=>$datalist]);
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment,$id)
    {

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfile/', $name);
        }

        DB::table('treatments')
            ->where('id',$id)
            ->update([
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
                'detail' => $request->detail,
                'categoryid' => $request->categoryid,
                'status' => $request->status,
                'price' => $request->price,
                'image' => $name

            ]);


        return redirect('admin/treatments')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment,$id)
    {
        DB::select ('DELETE FROM treatments WHERE Id=?',[$id]);
        return redirect('admin/treatments')->with('success', 'deleted successfully');
    }
}
