<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Logs extends Model
{
    use Notifiable;
		protected $table = 'logs';

    protected $fillable = [
        'table', 'tableId', 'action', 'message'
    ];

}
