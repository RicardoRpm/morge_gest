<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaveta extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_ultima_manutencao',
        'local_gaveta',
        'disponibilidade_gaveta',
        'info_adicional',
        'camera_id'
    ];
}
