<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class ExpedienteMedico extends Model
{
    use HasFactory;
    protected $table = 'expedientes_medicos';
    protected $fillable = [
        'motivo_consulta',
        'problema_actual',
        'crono_sintomatologia',
        'trata_previos',
        'diagnostico',
        'org_economica',
        'org_recreativa',
        'org_personal',
        'hist_familiar',
        'hist_laboral',
        'rela_senti_sexual',
        'rela_interpersonales',
        'rela_intrapersonales',
        'autoestima',
        'autosatisfacciones',
        'idealizaciones',
        'obs_generales',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
