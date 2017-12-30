<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Roles extends Model
{
    use Notifiable;
		protected $table = 'users_role';

		protected $fillable = [
        'name',
    ];


}
