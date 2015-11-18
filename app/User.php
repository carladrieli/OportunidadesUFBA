<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Laracasts\Presenter\PresentableTrait;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    // use PresentableTrait;

    protected $presenter = 'App\Presenters\UsuarioPresenter';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'email', 'senha', 'tipoAcesso', 'matricula', 'siape', 'cnpj'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['senha', 'remember_token'];


     public function getAuthPassword() {
        return $this->senha;
    }

    public function isAdmin()
    {
      return $this->admin == 'Y';
    }

    public function isEmpresa()
    {
      return $this->tipoAcesso == 'E';
    }

    public function isAluno()
    {
      return $this->tipoAcesso == 'A';
    }

    public function isProfessor()
    {
      return $this->tipoAcesso == 'P';
    }
}
