<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'name', 'description', 'state', 'created_at', 'updated_at'];

    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }
}
