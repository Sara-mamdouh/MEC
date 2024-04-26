<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    public function scopeFilter($query,$filter)
    {
        // dd($filter);
        if($filter->get("q")){
            $searchValue = $filter->get("q");
            return $query->where("name_user","like","%$searchValue%")->orwhere("category_name","like","%$searchValue%");
        }
        
    }
}
