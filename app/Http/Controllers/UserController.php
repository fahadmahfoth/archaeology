<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model,Request $request)
    {

        if($request->user()['permission']=='superuser' ){
           
           
            return view('users.index', ['users' => $model->paginate(15)]);
        }else{
            return "You are Not Admin ";
            
        }
        
        
    }



    public function create(Request $request)


    {

        if($request->user()['permission']=='superuser' ){
           
           
            return view('users.create');
        }else{
            return "You are Not Admin ";
            
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);


        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']), //<==encrypt here
        ]);

       

            

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }


    public function edit($id,Request $request)
    {
       
        if($request->user()['permission']=='superuser' ){
            $user = User::findOrFail($id);
           
           
            return view('users.edit', ['user'=>$user]);
        }else{
            return "You are Not Admin ";
            
        }

        
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
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);

        $input = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']), //<==encrypt here
        ];
        
       
        $user->fill($input)->save();

       
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        if($request->user()['permission']=='superuser' ){
           
           
            $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
        }else{
            return "You are Not Admin ";
            
        }
       
    }
}

