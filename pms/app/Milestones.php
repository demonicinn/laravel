<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Milestones extends Model
{
    use Notifiable;
		protected $table = 'milestones';

    protected $fillable = [
        'title', 'message'
    ];

}
