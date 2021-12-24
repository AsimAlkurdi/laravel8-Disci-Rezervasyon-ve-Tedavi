<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class treatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql='select h.*, c.title as category
              from treatment h, category c
              where h.categoryid = c.id
              ORDER BY h.title';
        $treatment = DB::select ($sql);
        return view("admin.treatment",["treatment"=>$treatment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::select ('select * FROM category ORDER BY title');

        return view("admin.treatmentadd",["category"=>$category]);
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


        DB::table('treatment')->insert([
            [ 'title' => $request->get('title'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'detail' => $request->get('detail'),
                'categoryid' => $request->get('categoryid'),
                'usersid' => Auth::id(),
                'status' => $request->get('status'),
                'price' => $request->get('price'),
                'image' => $name
            ]
        ]);


        return redirect('admin/treatments')->with('success', 'added new treatment successfully');
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
        $category = DB::select ('select * FROM category ORDER BY title');

        //$data = DB::select ('select * FROM homes WHERE Id=?',[$id]);
        $data=DB::select ('select h.*, c.title as category
              from treatment h, category c
              where h.categoryid = c.id AND h.Id=?',[$id]);
        // $data = DB::select ($sql,[$id]);
        return view("admin.treatmentedit",compact('data','category'));
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
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfile/', $name);
        }
        else{
            $name=$request->image2;
        }

        DB::table('treatment')
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select ('DELETE FROM treatment WHERE Id=?',[$id]);
        return redirect('admin/treatments')->with('success', 'deleted successfully');
    }
}
