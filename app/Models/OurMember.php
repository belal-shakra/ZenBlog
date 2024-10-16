<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurMember extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'path',
        'name',
        'role',
        'bio',
    ];
}
