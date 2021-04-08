<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FichaMedica;
use App\Models\ExpedienteMedico;

class Paciente extends Model
{
    use HasFactory;

    public function fichaMedica()
    {
        return $this->hasOne(FichaMedica::class);
    }

    public function expediente()
    {
        return $this->hasMany(ExpedienteMedico::class);
    }
}
