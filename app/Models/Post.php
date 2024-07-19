<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'short_description',
        'content_1',
        'img',
        'img_description',
        'content_2',
        'views',
        'category_id',
        'user_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
