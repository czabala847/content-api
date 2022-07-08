<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['id', 'category_id', 'image', 'title', 'description', 'url', 'content', 'date_limit', 'state', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ContentTag::class);
    }
}
