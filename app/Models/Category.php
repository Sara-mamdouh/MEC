<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_name',
        'price',
        'duration',
        'image'
    ];
   
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class)->using(CategoryCourse::class);
    }
    
}
