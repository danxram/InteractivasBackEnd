<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'privileges_id',
        'first_name',
        'last_name',
        'email',
        'created_at'
    ];
}
