<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notes extends Model
{
    use Notifiable;
		protected $table = 'notes';

    protected $fillable = [
        'title', 'message'
    ];

}
