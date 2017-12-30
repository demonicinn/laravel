<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects extends Model
{
    use Notifiable;
		protected $table = 'projects';

    protected $fillable = [
        'name','price','client','getting','type','description',
    ];

}
