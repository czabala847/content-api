<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'name', 'description', 'image'];

    protected $hidden = array('created_at', 'updated_at');

    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }
}
