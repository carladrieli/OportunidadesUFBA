<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    protected $table = "oportunidades";

    public function candidatos()
    {
      return $this->hasMany(OportunidadeCandidato::class);
    }

    public function cursos()
    {
      return $this->belongsToMany(Curso::class);
    }

    public function dono()
    {
      return $this->belongsTo(User::class);
    }
}
