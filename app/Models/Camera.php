<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao_camera',
        'desc_area_camera',
        'data_instalacao',
        'data_ultima_manutencao',
        'estado_camera'
    ];
}
