<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'status_paciente_id',
        'statusPacienteRelationship',
        'profissionaisRelationship',
    ];

    public function getStatusPacienteAttribute()
    {
        return $this->statusPacienteRelationship;
    }

    public function getProfissionaisAttribute()
    {
        return $this->profissionaisRelationship;
    }

    public function statusPacienteRelationship()
    {
        return $this->belongsTo(StatusPaciente::class, 'status_paciente_id');
    }

    public function profissionaisRelationship()
    {
        return $this->belongsToMany(Profissional::class, 'pacientes_has_profissionais', 'paciente_id', 'profissional_id');
    }
}
