<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoricoPaciente extends Model
{
    protected $table = 'historico_pacientes';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
