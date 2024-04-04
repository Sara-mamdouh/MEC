<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;

class AdminController extends Controller
{
    //
    public function create(){
        $categorys = Category::all();
        // $data = Category::find(10);
        // $data = Category::with('courses');

        // dd($data);
        $courses=Course::all();
        return view("admin.category",["categorys"=>$categorys,"courses"=>$courses]);
    }
    public function store(Request $request){
        dd($request->all());
    

        $diplomaName=$request->name;
        $diplomaPrice=$request->price;
        $diplomaDuration=$request->duration;
        $diplomaPhoto=$request->file('photo')->store('','public');
    
        Category::create(
            [
                'category_name'=>$diplomaName,
                'price'=>$diplomaPrice,
                'duration'=>$diplomaDuration,
                'image'=>$diplomaPhoto
            ]
        );
        // $lastId =Category::all()->last()->id +1;
        // CategoryCourse::create(
        //     [
        //         'category_id'=>$lastId,
        //         'course_id'=>
        //     ]
        //  );

        // return to_route("products.index")->with("requestStatus","product created successfuly");

        return to_route("diplomas.create");
    }
    
    public function destroy($categoryID){
        // dd($categoryID);
        $category = Category::find($categoryID);
        // dd($category);
        $category->delete();
        return to_route("diplomas.create");
    }

}
