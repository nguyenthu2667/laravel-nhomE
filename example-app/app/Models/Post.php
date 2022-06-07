<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postTitle',
        'postContent',
        'postImgpagecove',
        'postDate',
    ];
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'postDate';

    public function categories()
    {
        return $this->belongsToMany(Category::class,PostCategory::class);
    }
}
