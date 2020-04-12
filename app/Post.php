<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // 一度に設定できるカラムを定義(Mass Assignment)
    protected $fillable = ['title', 'body'];
}
