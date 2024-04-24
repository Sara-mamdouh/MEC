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
    public function add_cart($categoryID){
        if(Auth::id()){
            // return redirect()->back();
            $user=Auth::user();
            // dd($user);
            $diploma=Category::find($categoryID);
            // dd($diploma);
            $cart= new Cart();
            $cart->name_user=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->user_type=$user->usertype;
            $cart->user_id=$user->id;

            $cart->category_id=$diploma->id;
            $cart->category_name=$diploma->category_name;
            $cart->category_price=$diploma->price;

            $cart->save();
            return redirect()->back();


        }else{
            return redirect("login");

        }
    }
    public function show_cart(){
        if(Auth::id()){
            $id=Auth::user()->id;
            $diplomas=Cart::where("user_id","=",$id)->get();
            // dd($diplomas);
            return view('home.showcart',['diplomas'=>$diplomas]);

        }else{
            return redirect("login");

        }
    }
    public function remove_cart($id){

        $diploma=Cart::find($id);
        $diploma->delete();
        
        return redirect()->back();

       
    }
    public function cash_booking(){
        $user=Auth::user();
        $userId = $user->id;
        // dd($userId);
        $categorys = Cart::where("user_id","=", $userId)->get();
        // dd($categorys);
        foreach($categorys as $category){
            $booking = new Booking();
            $booking->name_user= $category->name_user;
            $booking->email= $category->email;
            $booking->phone= $category->phone;
            $booking->user_type= $category->user_type;
            $booking->user_id= $category->user_id;
            $booking->category_id= $category->category_id;
            $booking->category_name= $category->category_name;
            $booking->category_price= $category->category_price;

            $booking->payment_status= "cash upon attendance";
            $booking->booking_status= "processing";
            $booking->save();
            $cart_id=$category->id;
            $cart=Cart::find($cart_id);
            $cart->delete();


        }
        return redirect()->back();




       
    }

    
}
