<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    protected $appends =[
        'getParentTree'
    ];

    public static function getParentTree($category , $title)
    {
        if ($category->usd_id == 0){
            return $title;
        }
        $parent = Category::find($category->usd_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentTree($parent,$title);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= Category::with('children')->get();
        $category= DB::select('select c.*, b.title as categoryusd
              from categories c left join categories b
               on c.usd_id = b.id
              ORDER BY c.title');

        return view("admin.category",["category"=>$category],["datalist"=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::with('children')->get();
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
        DB::table('categories')->insert([
            [ 'title' => $request->get('title'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'usd_id' => $request->get('usd_id'),
                'status' => $request->get('status'),
                'image' => $name,

            ]
        ]);


        return redirect('admin/category')->with('success', 'added new category successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {

        $category = DB::select ('select c.*, b.title as categoryusd
              from categories c left join categories b
               on c.usd_id = b.id
              where c.Id=?',[$id]);
        $data= Category::with('children')->get();

        return view("admin.categoryedit",compact('data','category'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/userfile/', $name);
    }


        DB::table('categories')
            ->where('id',$id)
            ->update([
                'title' => $request->title,
                'keywords' => $request->keywords,
                'description' => $request->description,
                'usd_id' => $request->usd_id,
                'status' => $request->status,
                'image' => $name,

            ]);


        return redirect('admin/category')->with('success', 'updated category successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        DB::select ('DELETE FROM categories WHERE Id=?',[$id]);
        return redirect('admin/category')->with('success', 'deleted successfully');
    }
}

