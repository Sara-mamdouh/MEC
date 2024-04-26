<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Relations\Pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_course',
        'topics' 
    ];
    public function scopeFilter($query,$filter)
    {
        // dd($filter);
        if($filter->get("q")){
            $searchValue = $filter->get("q");
            return $query->where("name_course","like","%$searchValue%")->orwhere("topics","like","%$searchValue%");
        }
        
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
