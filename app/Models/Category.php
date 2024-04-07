<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function instructors(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
    
}
