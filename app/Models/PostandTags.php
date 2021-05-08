<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostandTags extends Model
{
    use HasFactory;
     
    //Table, Primary key, increment flag, filltable, timestamp flag

    protected $table = 'postandtags';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id', 'post_id', 'tag_id'];
}
