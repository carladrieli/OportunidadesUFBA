<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OportunidadeCandidato extends Model
{
    protected $table = "oportunidades_candidatos";
    protected $fillable = ['usuario_id', 'oportunidade_id'];


    public function oportunidade()
    {
      return $this->belongsTo(Oportunidade::class);
    }

}
