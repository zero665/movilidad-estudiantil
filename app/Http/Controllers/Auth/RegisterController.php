<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Alumno;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'numeroDeControl' => 'required|integer|max:99999999',
            'contrasenia' => 'required|string|min:6|confirmed',
            'nombre' => 'required|string|max:25',
            'apellidoPaterno' => 'required|string|max:30',
            'apellidoMaterno' => 'required|string|max:30',
            'correo' => 'required|string|email|max:255|unique:alumnos',
            //'idInstitucion' => 'required|string|max:100',
            //'carrera' => 'required|string|max:100',
            //'fechaIngreso' => 'required|string|date',
            //'numeroTelefonico' => 'required|string|max:50',
        ]);
    }
    /**
     * Create a new alumno instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Alumno
     */
    protected function create(array $data)
    {
        return Alumno::create([
            'numeroDeControl' => $data['numeroDeControl'],
            'contrasenia' => bcrypt($data['contrasenia']),
            'nombre' => $data['nombre'],
            'apellidoPaterno' => $data['apellidoPaterno'],
            'apellidoMaterno' => $data['apellidoMaterno'],
            'correo' => $data['correo'],
            'idInstitucion' => $data['idInstitucion'],
            'carrera' => $data['carrera'],
        ]);
    }

    protected function guard()
    {
        return Auth::guard('guard-alumno');
    }

}