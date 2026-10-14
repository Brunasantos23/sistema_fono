<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntencedentePatologico extends Model
{
    protected $table = 'antencedente_patologicos';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    
}
