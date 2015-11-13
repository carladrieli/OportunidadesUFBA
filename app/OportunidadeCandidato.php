<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OportunidadeCandidato extends Model
{
    $table = "oportunidades_candidatos";

    public function oportunidade()
    {
      return $this->belongsTo(Oportunidade::class);
    }

}
