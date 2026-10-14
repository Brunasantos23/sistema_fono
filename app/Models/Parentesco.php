<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = 'parentescos';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
