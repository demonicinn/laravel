<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects_credentials extends Model
{
    use Notifiable;
		protected $table = 'projects_credentials';

    protected $fillable = [
        'type','host','email','password','port',
    ];

}
