<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Designation extends Model
{
    use Notifiable;
		protected $table = 'users_designation';


}
