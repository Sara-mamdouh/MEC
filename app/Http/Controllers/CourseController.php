<?php

namespace App\Http\Controllers;
// use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;


class CourseController extends Controller
{
    //
    public function index(Request $request){
      
        $Courses = Course::latest()->filter($request->query)->paginate(6);
        if($request->has('q')){
            return view("partials.adminpage._showCourses",["courses"=>$Courses])->render();
        }else{
            return view("admin.course",["courses"=>$Courses]);


        }
      
    }
    public function store(StoreCourseRequest $request){
        // dd($request->all());
    
        Course::create(
        [
            'name_course'=>$request->name,
            'topics'=>$request->topics,
           
        ]
        );
     

        return to_route("courses.index")->with("requestStatus","course create successfully");
    }
    public function edit($courseId){
        // dd($categoryId);

        $course = Course::find($courseId);
        //    dd($category);


      return view("admin.edit_course",["course"=>$course]);
    }

    public function update($courseId ,StoreCourseRequest $request){
        // dd($categorytID);
        $course = Course::find($courseId);
        $course->name_course =$request->name;
        $course->topics =$request->topics;

        $course->save();
        return to_route("courses.index")->with("requestStatus","course update successfully");

    }
    
    public function destroy($courseID){
        $courseID = Course::find($courseID);
        // dd($courseID);
        $courseID->categories()->detach();

        $courseID->delete();
        return to_route("courses.index");

        
    }
}
