<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    public function sponsor()
    {
         return $this->hasOne(Sponsor::class, 'username', 'github_username');
    }

    public function getIsSponsorAttribute()
    {
        return !! $this->sponsor;
    }
}
