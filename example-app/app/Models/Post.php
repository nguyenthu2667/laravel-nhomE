<?php

namespace App\Models;

use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        // return $this->belongsToMany(Category::class);
    }
}
