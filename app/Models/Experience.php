<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'year_range',
        'title',
        'company',
        'icon',
        'responsibilities',
        'sort_order',
    ];

    /**
     * Get the responsibilities as an array of lines.
     */
    public function getResponsibilitiesListAttribute()
    {
        if (empty($this->responsibilities)) {
            return [];
        }
        return array_filter(
            array_map('trim', explode("\n", str_replace("\r", "", $this->responsibilities)))
        );
    }
}
