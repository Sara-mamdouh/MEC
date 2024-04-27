<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCourses = Course::all();

        return response()->json(["courses"=>$allCourses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newCourse = Course::create([
            "name_course"=>$request->input('name_course'),
            "topics"=>$request->input('topics'),

        ]);
        $res =[
            "message" => "Course created successfully",
            "data"=>$newCourse
        ];
        return response()->json($res , 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $course = Course::find($request->route("course"));
        if(!$course) return response()->json(["message" => "course not found"] , 404);

        $res =[
            "message" => "course below",
            "data"=>$course
        ];
        return response()->json($res , 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update([
            "name_course"=>$request->name_course,
            "topics"=>$request->topics,
          
        ]);
        $res =[
            "message" => "course updated",
            "data"=>$course
        ];
        return response()->json($res , 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        $res =[
            "message" => "course deleted successfully",
        ];
        return response()->json($res);
    }
}
