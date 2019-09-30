<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Session;

class UserController extends Controller
{
    public function list(){
    	$data['user'] = User::where('status',1)->get();
    	return view('page.listuser',$data);
    }
    public function adminpage(){
    	return view('page.admin');
    }

    public function adduser(){
    	return view('page.adduser');
    }
    public function postadduser(Request $request){

        $validator = Validator::make($request->all(), [
           'name'=>'required|min:3|max:100',
           'pass'=>'required|min:6|max:10',
           'PassAgain'=>'required|same:pass',
           'fullname'=>'required|min:3|max:100',
           'email'=>'required|email|unique:users,email', 
           'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        if ($validator->fails()) {
            return redirect(route('admin.adduser'))
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->hasFile('images')){
                $images = time().'.'.$request->images->extension(); 
                $request->images->move(public_path('image/'), $images);
                return redirect(route('admin.confirmuser'))
                        ->withInput()->with(['images'=>$images]);
            }else{
             return redirect(route('admin.confirmuser'))
                        ->withInput();
        }
            }
    }

    public function confirmuser(Request $request){
        if(null!=Session::get('images')){
             $images= Session::get('images');
             return view('page.confirm',compact('images'));
        }else{
             return view('page.confirm');
        }
      
        
    }
}
