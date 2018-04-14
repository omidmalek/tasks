<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public  function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public  function relationworks()
    {
        return $this->hasMany(Relationwork::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','family','status','mobile','permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
