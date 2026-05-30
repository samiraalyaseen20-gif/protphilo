<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeSetting extends Model
{
    protected $fillable = [
        'degree',
        'university',
        'graduation_year',
        'languages',
        'skills',
    ];

    /**
     * Get languages as array of lines.
     */
    public function getLanguagesListAttribute()
    {
        if (empty($this->languages)) {
            return [];
        }
        return array_filter(
            array_map('trim', explode("\n", str_replace("\r", "", $this->languages)))
        );
    }

    /**
     * Get skills as array of lines.
     */
    public function getSkillsListAttribute()
    {
        if (empty($this->skills)) {
            return [];
        }
        return array_filter(
            array_map('trim', explode("\n", str_replace("\r", "", $this->skills)))
        );
    }
}
