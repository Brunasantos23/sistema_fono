<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnamneseGeral extends Model
{
    protected $table = 'anamneses_gerais';

    protected $guarded = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'paciente_id',
        'pacienteRelationship',
        'historico_paciente_id',
        'historicoPacienteRelationship',
        'desenvolvimento_global_id',
        'desenvolvimentoGlobalRelationship',
        'antecedente_patologico_id',
        'antecedentePatologicoRelationship',
        'profissional_id',
        'profissionalRelationship',
    ];

    public function getPacienteAttribute()
    {
        return $this->pacienteRelationship;
    }

    public function getHistoricoPacienteAttribute()
    {
        return $this->historicoPacienteRelationship;
    }

    public function getDesenvolvimentoGlobalAttribute()
    {
        return $this->desenvolvimentoGlobalRelationship;
    }

    public function getAntecedentePatologicoAttribute()
    {
        return $this->antecedentePatologicoRelationship;
    }

    public function getProfissionalAttribute()
    {
        return $this->profissionalRelationship;
    }

    public function pacienteRelationship()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function historicoPacienteRelationship()
    {
        return $this->belongsTo(HistoricoPaciente::class, 'historico_paciente_id');
    }

    public function desenvolvimentoGlobalRelationship()
    {
        return $this->belongsTo(DesenvolvimentoGlobal::class, 'desenvolvimento_global_id');
    }

    public function antecedentePatologicoRelationship()
    {
        return $this->belongsTo(AntecedentePatologico::class, 'antecedente_patologico_id');
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
