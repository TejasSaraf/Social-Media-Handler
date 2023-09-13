<?php

namespace App\Models\Models;
use Illuminate\Database\Eloquent\Model;
class Project extends Model
{
    protected $fillable = ['name', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function socialMediaTokens()
    {
        return $this->hasMany(SocialMediaToken::class);
    }

    public function projectLogs()
    {
        return $this->hasMany(ProjectLog::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
