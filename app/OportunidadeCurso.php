<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OportunidadeCurso extends Model
{
    protected $table = "oportunidades_cursos";
    protected $fillable = ['oportunidade_id', 'curso_id'];

    public function oportunidade()
    {
      return $this->belongsTo(Oportunidade::class);
    }

}
