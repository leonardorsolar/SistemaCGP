<?php

namespace App\Entities;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class AreaProject extends Model
{
    protected $guarded = [];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
