<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('select h.*, c.title as treatmenttitle, u.name as username
              from reviews h, treatments c, users u
              where h.treatmentid = c.id and h.usersid = u.id
              ORDER BY h.id');
        return view("admin.review",["datalist"=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review,$id)
    {
        $data = DB::select('select h.*, c.title as treatmenttitle, u.name as username
              from reviews h, treatments c, users u
              where h.treatmentid = c.id and h.usersid = u.id
              ORDER BY h.id');
        return view("admin.review_edit",["data"=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review,$id)
    {
        $data = Review::find($id);
        $data->status=$request->input('status');
        $data->save();
        return redirect('admin/review')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review,$id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }
}
