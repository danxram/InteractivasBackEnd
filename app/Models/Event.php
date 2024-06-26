<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'categories_id',
        'courses_id',
        'name',
        'image',
        'date',
        'time',
        'description',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id');
    }
}
