<?php

namespace App\Models\Models;

class Subscription extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
