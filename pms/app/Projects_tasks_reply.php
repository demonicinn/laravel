<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects_tasks_reply extends Model
{
    use Notifiable;
    protected $table = 'projects_tasks_reply';

    protected $fillable = [
        //'message',
    ];

}
