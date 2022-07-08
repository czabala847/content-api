<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentTag extends Model
{
    protected $fillable = ['id', 'content_id', 'tag_id', 'created_at', 'updated_at'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
