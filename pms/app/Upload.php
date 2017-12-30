<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Upload extends Model
{
		protected $table = 'upload_files';

    protected $fillable = [
        'file',
    ];

}
