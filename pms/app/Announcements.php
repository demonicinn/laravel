<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Announcements extends Model
{
    use Notifiable;
		protected $table = 'announcements';

    protected $fillable = [
        'title', 'message'
    ];

}
