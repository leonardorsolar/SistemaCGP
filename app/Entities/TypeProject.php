<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    protected $guarded = [];

    public function areasProjects()
    {
        return $this->hasMany(AreaProject::class);
    }
}
