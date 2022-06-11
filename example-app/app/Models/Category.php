<?php

namespace App\Models;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'categoryName',
        'categoryType',
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class,PostCategory::class);
    }
}
