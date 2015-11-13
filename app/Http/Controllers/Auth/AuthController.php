<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $loginPath = 'auth/login';
    protected $redirectAfterLogout = '/';
    protected $redirectTo = 'painel/';
    protected $redirectPath = 'painel/';

    protected $password = 'senha';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios',
            'senha' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'senha' => bcrypt($data['senha']),
            'tipoAcesso' => $data['tipoAcesso'],
            'matricula' => $data['matricula'],
            'siape' => $data['siape'],
            'cnpj' => $data['cnpj'],
        ]);
    }

    public function postRegister(Request $request)
    {

        $usuario = new User;
        $usuario->nome = $request->get('nome');
        $usuario->email = $request->get('email');
        $usuario->senha = bcrypt($request->get('senha'));
        $usuario->tipoAcesso = $request->get('tipoAcesso');
        $usuario->matricula = $request->get('matricula');
        $usuario->siape = $request->get('siape');
        $usuario->cnpj = $request->get('cnpj');

        $usuario->save();

        Auth::login($usuario);

        return redirect($this->redirectPath());
    }
}
