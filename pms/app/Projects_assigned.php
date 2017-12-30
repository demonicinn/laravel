<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects_assigned extends Model
{
    use Notifiable;
		protected $table = 'projects_assigned';

    protected $fillable = [
        'assign',
    ];

}
