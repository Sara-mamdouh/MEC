<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use App\Models\Instructor;
use App\Models\Cart;
use App\Models\Booking;


// use App\Http\Controllers\Auth;
class HomeController extends Controller
{
    //
    public function redirect(){
        $userType=Auth::user()->usertype;
        $categorys = Category::all();
        $instructors = Instructor::all();
        // dd($userType);
        if($userType =="1"){
            return view('admin.home');
        }else{
            return view('home.userpage',["categorys"=>$categorys,"instructors"=>$instructors]);
        }
    }

    public function index(){

        // $categorys = Category::paginate(4);
        $categorys = Category::all();

        $instructors = Instructor::all();
        // dd($categorys);

        return view("home.userpage",["categorys"=>$categorys,"instructors"=>$instructors]);
    }
    public function show($categoryID){
        $category = Category::find($categoryID);
        $courses=$category->courses;
        $instructors=$category->instructors;
        // dd($category->instructors);

        return view("home.categorypage",["category"=>$category,"courses"=>$courses,"instructors"=>$instructors]);
    }
    public function about(){
        return view('home.about');
    }
    

    
}
