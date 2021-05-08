<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class e extends Model
{
    use HasFactory;

    //Table, Primary key, increment flag, filltable, timestamp flag

    protected $table = 'e';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'role_id', 'email', 'password', 'status'];
}
