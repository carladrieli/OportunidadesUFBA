<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    protected $table = "oportunidades";

    protected $fillable = ['usuario_id', 'titulo', 'descricao', 'cargaHoraria', 'valor'];

    public function candidatos()
    {
      return $this->hasMany(OportunidadeCandidato::class);
    }

    public function cursos()
    {
      return $this->belongsToMany(Curso::class,'oportunidades_cursos');
    }

    public function dono()
    {
      return $this->belongsTo(User::class);
    }
}
