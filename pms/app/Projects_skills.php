<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects_skills extends Model
{
    use Notifiable;
		protected $table = 'projects_skills';

    protected $fillable = [
        'skill',
    ];

}
