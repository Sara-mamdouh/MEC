<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

// use App\Http\Controllers\Auth;
class HomeController extends Controller
{
    //
    public function redirect(){
        $userType=Auth::user()->usertype;
        // dd($userType);
        if($userType =="1"){
            return view('admin.home');
        }else{
            return view('home.userpage');
        }
    }

    public function index(){
        return view("home.userpage");
    }
}
