<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryCourse extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'course_id',
        
    ];
    protected $table='category_course';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
   public $incrementing = true;
}
