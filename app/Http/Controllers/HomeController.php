<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use App\Models\Instructor;

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

        $categorys = Category::all();
       
        return view("home.userpage",["categorys"=>$categorys]);
    }
    
}
