<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusAgendamento extends Model
{
    protected $table = 'status_agendamentos';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
