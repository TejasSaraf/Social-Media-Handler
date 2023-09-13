<?php

namespace App\Models\Models;

class CaseStudy extends Model
{
    protected $fillable = ['title', 'description', 'solution', 'result'];

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
