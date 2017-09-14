<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join('roles','roles.id','=','users.role_id')
                ->select('users.*','roles.name as rolename')
                ->orderBy('users.id','DESC')
                ->get(); 
        return view('user.index',compact('users'), ['roles'=>Role::pluck('name','id')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', ['roles'=>Role::pluck('name','id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()) {
            $user = new User();
            $user['name'] = $request->name;
            $user['email'] = $request->email;
            $user['password'] = $request->password;
            $user['role_id'] = $request->role_id;
            
            if($user->save()) {
                return response(['msg'=>'inserted successfully']);
            }
        }
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
        return response(User::find($id));
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
        if($request->ajax()) {
            $user = User::find($id);
            $user['name'] = $request['name'];
            $user['email'] = $request['email'];
            $user['role_id'] = $request['role_id'];
            $user->save();

            return response(['msg'=>'update successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response(['id'=>$id]);
    }
}
