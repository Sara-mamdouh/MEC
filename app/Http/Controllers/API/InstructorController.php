<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allInstructors = Instructor::all();
        // dd($allCategory);

        return response()->json(["instructors"=>$allInstructors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newInstructor = Instructor::create([
            "instructor_name"=>$request->input('instructor_name'),
            "job"=>$request->input('job'),
            "experience"=>$request->input('experience'),
            "image"=>$request->input('image'),
            "category_id"=>$request->input('category_id'),

        ]);
        $res =[
            "message" => "Instructor created successfully",
            "data"=>$newInstructor
        ];
        return response()->json($res , 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $instructor = Instructor::find($request->route("instructor"));
        if(!$instructor) return response()->json(["message" => "instructor not found"] , 404);
        $res =[
            "message" => "instructor below",
            "data"=>$instructor
        ];
        return response()->json($res , 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor->update([
            "instructor_name"=>$request->instructor_name,
            "job"=>$request->job,
            "experience"=>$request->experience,
            "image"=>$request->image,
            "category_id"=>$request->category_id,
        ]);
        $res =[
            "message" => "instructor updated",
            "data"=>$instructor
        ];
        return response()->json($res , 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        $res =[
            "message" => "instructor deleted successfully",
        ];
        return response()->json($res);
    }
}
