<?php

namespace App\Models;

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
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->using(CategoryCourse::class);
    }

}
