<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
class InstructorController extends Controller
{
    //
    public function create(){
        $Instructors=Instructor::all();
        $categorys = Category::all();
        return view("admin.instructor",["instructors"=>$Instructors,"categorys"=>$categorys]);
    }
    public function store(Request $request){
        // dd($request->category);

        Instructor::create([
            'instructor_name'=>$request->name,
            'job'=>$request->job,
            'experience'=>$request->experience,
            'category_id'=>$request->category,
        ]);

        return to_route("instructors.create");


    }
    public function destroy($instructorID){
        $instructor = Instructor::find($instructorID);
        // dd($instructor);
        $instructor->delete();
        return to_route("instructors.create");   
    }
}
