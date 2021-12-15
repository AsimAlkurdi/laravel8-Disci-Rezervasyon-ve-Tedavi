<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql='select c.*, b.title as categoryusd
              from category c left join category b
               on c.usd_id = b.id
              ORDER BY c.title';

        $category = DB::select ($sql);
        return view("admin.category",["category"=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::select ('select * FROM category ORDER BY title');

        return view("admin.categoryadd",["category"=>$category]);

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


        DB::table('category')->insert([
            [ 'title' => $request->get('title'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'usd_id' => $request->get('usd_id'),
                'status' => $request->get('status'),
                'image' => $name
            ]
        ]);


        return redirect('admin/category')->with('success', 'added new category successfully');
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

        $category = DB::select ('select c.*, b.title as categoryusd
              from category c left join category b
               on c.usd_id = b.id
              where c.Id=?',[$id]);
        $data= DB::select ('select * FROM category ORDER BY title');
        return view("admin.categoryedit",compact('data','category'));

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

        DB::table('category')
            ->where('id',$id)
            ->update([
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
                'usd_id' => $request->usd_id,
                'status' => $request->status,
                'image' => $name

            ]);


        return redirect('admin/category')->with('success', 'updated category successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select ('DELETE FROM category WHERE Id=?',[$id]);
        return redirect('admin/category')->with('success', 'deleted successfully');
    }
}
