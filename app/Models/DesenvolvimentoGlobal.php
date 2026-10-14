<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesenvolvimentoGlobal extends Model
{
    protected $table = 'desenvolvimento_globais';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
