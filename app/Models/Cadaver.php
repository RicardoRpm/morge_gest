<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadaver extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'idade',
        'genero',
        'estado_civil',
        'data_hora_obito',
        'causa_morte',
        'data_hora_entrada_morgue',
        'local_obito',
        'contacto_familiar_1',
        'contacto_familiar_2',
        'contacto_familiar_3',
        'id_gaveta',
        'info_medicas_relevantes',
        'detalhes_procedimento',
        'medico_autopsia',
        'emGaveta',
    ];
}
