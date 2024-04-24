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
    public function edit($courseId){
        // dd($categoryId);

        $course = Course::find($courseId);
        //    dd($category);


      return view("admin.edit_course",["course"=>$course]);
    }

    public function update($courseId ,Request $request){
        // dd($categorytID);
        $course = Course::find($courseId);
        $course->name_course =$request->name;
        $course->topics =$request->topics;

        $course->save();
        return to_route("courses.create");

    }
    
    public function destroy($courseID){
        $courseID = Course::find($courseID);
        // dd($courseID);
        $courseID->categories()->detach();

        $courseID->delete();
        return to_route("courses.create");

        
    }
}
