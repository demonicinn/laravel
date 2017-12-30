<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notifications extends Model
{
    use Notifiable;
		protected $table = 'notifications';

    protected $fillable = [
        'status', 'action', 'message'
    ];

}
