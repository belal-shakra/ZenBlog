<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'blog',
        'views',
        'user_id',
        'category_id',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }


    public function file(){
        return $this->hasOne(File::class);
    }


    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'save_user', 'blog_id', 'user_id');
    }
}
