<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'status_agendamento_id',
        'statusAgendRelationship',
        'profissional_id',
        'profissionalRelationship',
        'paciente_id',
        'pacienteRelationship',
    ];

    public function getStatusAgendamentoAttribute()
    {
        return $this->statusAgendRelationship;
    }

    public function getProfissionalAttribute()
    {
        return $this->profissionalRelationship;
    }

    public function getPacientesAttribute()
    {
        return $this->pacienteRelationship;
    }

    public function statusAgendRelationship()
    {
        return $this->belongsTo(StatusAgendamento::class, 'status_agendamento_id');
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
