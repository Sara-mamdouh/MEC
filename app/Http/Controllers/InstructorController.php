<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreInstructorRequest;
use App\Models\Instructor;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
class InstructorController extends Controller
{
    //
    public function create(Request $request){

    
        $Instructors=Instructor::latest()->filter($request->query)->paginate(6);
        $categorys = Category::all();
        if($request->has('q')){
            return view("partials.adminpage._showInstructor",["instructors"=>$Instructors,"categorys"=>$categorys])->render();
        }else{
            return view("admin.instructor",["instructors"=>$Instructors,"categorys"=>$categorys]);


        }

    }
    public function store(StoreInstructorRequest $request){
        // dd($request->category);

        Instructor::create([
            'instructor_name'=>$request->name,
            'job'=>$request->job,
            'experience'=>$request->experience,
            'category_id'=>$request->category,
            'image'=>$request->file('photo')->store('','public'),
        ]);

        return to_route("instructors.create")->with("requestStatus","instructor created successfully");


    }
    public function edit($instructorId){
        // dd($instructorId);

        $instructor = Instructor::find($instructorId);
        //    dd($instructor);
        $categorys = Category::all();

      return view("admin.edit_instructor",["instructor"=>$instructor,"categorys"=>$categorys]);
    }
    public function update($instructorId ,StoreInstructorRequest $request){
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

        return to_route("instructors.create")->with("requestStatus","instructor updated successfully");

    }
    public function destroy($instructorID){
        $instructor = Instructor::find($instructorID);
        // dd($instructor);
        $instructor->delete();
        return to_route("instructors.create");   
    }
}
