<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPaciente extends Model
{
    protected $table = 'status_pacientes';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
