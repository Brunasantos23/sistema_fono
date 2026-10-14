<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'status_profissional_id',
        'statusProfissionalRelationship',
        'pacientesRelationship',
    ];

    public function getStatusProfissionalAttribute()
    {
        return $this->statusProfissionalRelationship;
    }

    public function getPacientesAttribute()
    {
        return $this->pacientesRelationship;
    }

    public function statusProfissionalRelationship()
    {
        return $this->belongsTo(StatusProf::class, 'status_profissional_id');
    }

    public function pacientesRelationship()
    {
        return $this->belongsToMany(Paciente::class, 'pacientes_has_profissionais', 'profissional_id', 'paciente_id');
    }
}
