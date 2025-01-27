<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function post() {
        return $this->hasMany(Post::class ,'category_id');
    }
    public function postCate() {
        return $this->hasManyThrough(Post::class, Category::class,'parent_id');
    }
}
