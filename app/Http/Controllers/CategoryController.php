<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use App\Models\Instructor;
use App\Models\Cart;


// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CategoryController extends Controller
{
    public function create(){
        $categorys = Category::all();

        $courses=Course::all();
        // $category =Category::find(30);

        // foreach ($category->courses as $course) {
        //     dd($course->name_course) ;
        // }
        
        return view("admin.category",["categorys"=>$categorys,"courses"=>$courses]);
    }
    public function store(Request $request){
    
        $diploma = new Category();
        // dd($request);

        $diploma->category_name =$request->name;
        $diploma->price =$request->price;
        $diploma->duration =$request->duration;
        $diploma->description =$request->description;
        $diploma->image = $request->file('photo')->store('','public');

        $diploma->save();
        // // $diploma->courses()->attach(6);
                $lastInsertedId = $diploma->id;
        // dd($request->select_process );

        foreach($request->select_process as $selected) {
            // dd($selected);
              CategoryCourse::create(
            [
                'category_id'=>$lastInsertedId,
                'course_id'=>$selected,

            ]
            );
        }
           
        
        
           

        // return to_route("products.index")->with("requestStatus","product created successfuly");

        return to_route("diplomas.create");
    }
   

    public function edit($categoryId){
        // dd($categoryId);

    $category = Category::find($categoryId);
    //    dd($category);
    $courses=Course::all();


      return view("admin.edit_category",["category"=>$category,"courses"=>$courses]);
    }

    public function update($categorytID ,Request $request){
        // dd($categorytID);

        $diploma = Category::find($categorytID);
        $diploma->category_name =$request->name;
        $diploma->price =$request->price;
        $diploma->duration =$request->duration;
        if($request->file('photo') !=null){
            $diploma->image = $request->file('photo')->store('','public');
        }
        $diploma->description =$request->description;
        $diploma->save();
        $diploma->courses()->detach();

      
        foreach($request->select_process as $selected) {
            // dd($selected);
              CategoryCourse::create(
            [
                'category_id'=>$categorytID,
                'course_id'=>$selected,

            ]
            );
        }
        return to_route("diplomas.create");

    }
    public function destroy($categoryID){
        // dd($categoryID);
        $category = Category::find($categoryID);
        // dd($category);
        $category->courses()->detach();
        $category->users()->detach();

        // $category->instructors()->delete();
        Instructor::whereCategoryId($categoryID)->update(['category_id' => null]);


        $category->delete();
        return to_route("diplomas.create");
 
    }
  
}






    
    


