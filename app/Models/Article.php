<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'preview_text',
        'detail_text',
        'preview_image',
        'detail_image',
        'category_id',
        'published_at',
        'active',
    ];
    protected $casts = [
        'published_at' => 'datetime',
        'active' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class);
    }
}
