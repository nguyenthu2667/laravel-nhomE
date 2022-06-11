<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $fillable = [
   ' id ',
   ' post_date',
   '  post_title',
   '   post_content ',
   '   post_imgpagecove',
    ];
}
