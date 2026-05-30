<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'category', 'description', 'year', 'image'];

    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('order')->orderBy('id');
    }
}
