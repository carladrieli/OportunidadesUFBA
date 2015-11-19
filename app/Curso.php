<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "cursos";
    protected $fillable = ['titulo'];

    public function oportunidades()
    {
        return $this->hasMany(Oportunidade::class);
        
    }
}
