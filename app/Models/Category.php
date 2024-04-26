<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Relations\Pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_name',
        'price',
        'duration',
        'image',
        'description'
    ];
    public function scopeFilter($query,$filter)
    {
        // dd($filter);
        if($filter->get("q")){
            $searchValue = $filter->get("q");
            return $query->where("category_name","like","%$searchValue%")->orwhere("price","like","%$searchValue%");
        }
        
    }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
    public function instructors(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class ,"carts");
    }
    
}
