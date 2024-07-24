<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'path',
        'blog_id',
    ];


    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
