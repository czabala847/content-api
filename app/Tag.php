<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['id', 'name', 'state', 'created_at', 'updated_at'];

    public function contents()
    {
        return $this->belongsToMany(ContentTag::class);
    }
}
