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
        'category_id',
        'image',


    ];
    public function category(){

        return $this->belongsTo(Category::class);
    }

}
