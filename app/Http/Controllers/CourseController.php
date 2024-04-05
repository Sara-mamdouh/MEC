<?php

namespace App\Http\Controllers;
// use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function create(){
        $Courses = Course::all();
      
        return view("admin.course",["courses"=>$Courses]);
    }
    public function store(Request $request){
        // dd($request->all());
    
        Course::create(
        [
            'name_course'=>$request->name,
            'topics'=>$request->topics,
           
        ]
        );
     

        return to_route("courses.create");
    }
    
    public function destroy($courseID){
        $courseID = Course::find($courseID);
        // dd($courseID);

        $courseID->delete();
        return to_route("courses.create");

        
    }
}
