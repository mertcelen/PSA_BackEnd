<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin ()
    {
        return $this->statusCheck(3);
    }

    public function isVerified(){
        return !$this->statusCheck(0);
    }

    protected function statusCheck ($status = 0)
    {
        return $this->status === $status ? true : false;
    }
}
