<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $table = 'recibos';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'profissional_id',
        'profissionalRelationship',
        'paciente_id',
        'pacienteRelationship',
    ];

    public function getProfissionalAttribute()
    {
        return $this->profissionalRelationship;
    }

    public function getPacientesAttribute()
    {
        return $this->pacienteRelationship;
    }

    public function profissionalRelationship()
    {
        return $this->belongsTo(Profissional::class, 'profissional_id');
    }

    public function pacienteRelationship()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
