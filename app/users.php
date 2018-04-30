<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\users as Authenticatable;

class users extends Authenticatable
{
	protected $table ='tài khoản';
	protected $fillable = [
      'name', 'email', 'password'
    ];
}