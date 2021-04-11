<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class FichaMedica extends Model
{
    use HasFactory;
    protected $table = 'ficha_medica';
    protected $fillable = ['escolaridad', 'ocupacion', 'estado_civil', 'religion', 'adicciones', 'vive_con', 'paciente_id'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
