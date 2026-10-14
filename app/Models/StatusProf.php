<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusProf extends Model
{
    protected $table = 'status_profs';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
