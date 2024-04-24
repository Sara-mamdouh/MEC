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
            'image'=>$request->file('photo')->store('','public'),
        ]);

        return to_route("instructors.create");


    }
    public function edit($instructorId){
        // dd($instructorId);

        $instructor = Instructor::find($instructorId);
        //    dd($instructor);
        $categorys = Category::all();

      return view("admin.edit_instructor",["instructor"=>$instructor,"categorys"=>$categorys]);
    }
    public function update($instructorId ,Request $request){
        // dd($instructorId);
        $instructor = Instructor::find($instructorId);
        $instructor->instructor_name =$request->name;
        $instructor->job =$request->job;
        $instructor->experience =$request->experience;
        $instructor->category_id = $request->category;
        if($request->file('photo') !=null){
            $instructor->image = $request->file('photo')->store('','public');
        }

        $instructor->save();

        return to_route("instructors.create");

    }
    public function destroy($instructorID){
        $instructor = Instructor::find($instructorID);
        // dd($instructor);
        $instructor->delete();
        return to_route("instructors.create");   
    }
}
