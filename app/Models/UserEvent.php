<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'client_users_id',
        'events_id'
    ];  
}
