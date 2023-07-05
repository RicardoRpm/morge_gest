<?php

namespace App\Http\Repository;

use App\Http\Enum\EnumStatusGavetas;
use App\Models\Gaveta;

class GavetaRepository
{

    public function AlterarEstadoGaveta(int $id, string $statusGavetasEnum)
    {
        $gaveta = Gaveta::find($id);
        $gaveta->disponibilidade_gaveta = $statusGavetasEnum;
        $gaveta->save();
    }
}
