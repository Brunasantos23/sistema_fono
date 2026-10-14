<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = 'responsavels';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'parentesco_id',
        'parentescoRelationship',
        'paciente_id',
        'pacienteRelationship',
    ];


    public function getParentescoAttribute()
    {
        return $this->parentescoRelationship;
    }

    public function getPacientesAttribute()
    {
        return $this->pacienteRelationship;
    }

    public function parentescoRelationship()
    {
        return $this->belongsTo(Parentesco::class, 'parentesco_id');
    }

    public function pacienteRelationship()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

}
