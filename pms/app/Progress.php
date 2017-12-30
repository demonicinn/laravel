<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Progress extends Model
{
    use Notifiable;
		protected $table = 'progress';

    protected $fillable = [
        'name','slug'
    ];

}
