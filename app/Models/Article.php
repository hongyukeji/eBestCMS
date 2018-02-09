<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const STATUS_INACTIVE = 0;  // 状态 无效
    const STATUS_ACTIVE = 1;    // 状态 有效

    protected $fillable = ['title', 'summary', 'content', 'cate_id', 'sort_order', 'status'];

    public function category()
    {
        return $this->hasOne(Category::class,'id', 'cate_id');
    }
}
