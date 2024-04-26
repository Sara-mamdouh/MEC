<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable=[
        'instructor_name',
        'job',
        'experience',
        'image',
        'category_id',


    ];
    public function scopeFilter($query,$filter)
    {
        // dd($filter);
        if($filter->get("q")){
            $searchValue = $filter->get("q");
            return $query->where("instructor_name","like","%$searchValue%")->orwhere("job","like","%$searchValue%");
        }
        
    }
    public function category(){

        return $this->belongsTo(Category::class);
    }

}
