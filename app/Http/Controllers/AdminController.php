<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
class AdminController extends Controller
{
    //
    public function create(){
        return view("admin.category");
    }
    public function store(Request $request){
        $diploma =new Category;

        $diplomaName=$request->name;
        $diplomaPrice=$request->price;
        $diplomaDuration=$request->duration;
        $diplomaPhoto=$request->file('photo')->store('','public');
    
        Category::create(
            [
                'category_name'=>$diplomaName,
                'price'=>$diplomaPrice,
                'duration'=>$diplomaDuration,
                'image'=>$diplomaPhoto
            ]
        );

        // return to_route("products.index")->with("requestStatus","product created successfuly");

        return to_route("diplomas.create");
    }
}
