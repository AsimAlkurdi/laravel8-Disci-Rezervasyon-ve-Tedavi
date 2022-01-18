<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = User::all();
        return view('admin.users',['datalist' =>$datalist]);

    }
    public function userrole( User $user,$id)
    {
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');
        return view('admin.user_role',['data' =>$data ,'datalist' =>$datalist]);

    }
    public function userrolestore(Request $request, User $user ,$id)
    {
        $user = User::find($id);
        $roleid =$request->input('roleid');
        $user->role()->attach($roleid);
        return redirect()->back()->with('success', 'Role Add Successfully');

    }
    public function userroledelete(Request $request, User $user ,$userid ,$roleid)
    {
        $user = User::find($userid);
        $user->role()->detach($roleid);
        return redirect()->back()->with('success', 'Role Deleted From User');

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user ,$id)
    {
        $data = User::find($id);
        return view('admin.users_show',['data' =>$data]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data = User::find($id);
        return view('admin.user_edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user ,$id)
    {
       $data = User::find($id);
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
         if ($request->file('image')!=null)   {

             $data->profile_photo_path = Storage::putFile('profile-photos' ,$request->file('image'));
         }
             $data->save();
        return redirect()->route('admin_user')->with('success', 'Updeted successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
