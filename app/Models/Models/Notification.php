<?php

namespace App\Models\Models;

class Notification extends Model
{
    protected $fillable = ['user_id', 'project_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
