<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects_tasks extends Model
{
    use Notifiable;
    protected $table = 'projects_tasks';

    protected $fillable = [
        'title','description'
    ];

}
