<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function RegisterUser(Request $request){

        $this->validate($request, [
           'name'=>'required|max:20',
           'email'=>'required|unique:users',
           'phone'=>'required',
           'password'=> 'required|min:2'
        ]);



        $table=new User();

        $table->name    = $request->input('name');
        $table->email   = $request->input('email');
        $table->phone   = $request->input('phone');
        $table->password= bcrypt($request->input('password'));

        $table->save();
        return redirect()->back()->with('message','Registerd Succsusfully');


    }




    public function LoginUser(Request $request){



        $this->validate($request, [

            'email'=>'required|',

            'password'=> 'required|'
        ]);


        $data=$request->only('email','password');

        if(Auth::attempt($data)){

            return redirect()->route('home');
        }

        return redirect()->back()->with('massage','Login Failed');


    }








    public function getHome(){
        return view('home');
    }


    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/')->with('message','you are Logged Out');
    }









}
