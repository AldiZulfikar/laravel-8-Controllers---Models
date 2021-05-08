<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        
    //Table, Primary key, increment flag, filltable, timestamp flag

    protected $table = 'post';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'category_id', 'imageUrl', 'imageName', 'content', 'user_id'];
}
