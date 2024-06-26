<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'sleep_hours',
        'physical_activity',
        'health_issues',
        'stress',
        'specific_diet',
        'aditional_info', 
    ];


}
