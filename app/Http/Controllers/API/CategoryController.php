<?php

namespace App\Http\Controllers\API;
// use App\Http\Requests\StoreCategoryRequest;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCategory = Category::all();
        // dd($allCategory);

        return response()->json(["categories"=>$allCategory]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $newCategory = Category::create([
            "category_name"=>$request->input('category_name'),
            "price"=>$request->input('price'),
            "duration"=>$request->input('duration'),
            "image"=>$request->input('image'),
            "description"=>$request->input('description'),

        ]);
        $res =[
            "message" => "category created successfully",
            "data"=>$newCategory
        ];
        return response()->json($res , 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $category = Category::find($request->route("category"));
        if(!$category) return response()->json(["message" => "category not found"] , 404);

        $res =[
            "message" => "category below",
            "data"=>$category
        ];
        return response()->json($res , 201);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
           
        $category->update([
            "category_name"=>$request->category_name,
            "price"=>$request->price,
            "duration"=>$request->duration,
            "image"=>$request->image,
            "description"=>$request->description,
        ]);
        $res =[
            "message" => "category updated",
            "data"=>$category
        ];
        return response()->json($res , 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $res =[
            "message" => "category deleted successfully",
        ];
        return response()->json($res);
    }
}
