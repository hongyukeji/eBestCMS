<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id', 'sort_order', 'status'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'cate_id', 'id');
    }
}
