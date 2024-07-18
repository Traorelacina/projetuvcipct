<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'adresse' => ['required', 'string'],
        'telephone' => ['required', 'string'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'metier' => ['required', 'string'],
        'pays' => ['required', 'string'],
        'ville' => ['required', 'string'],
        'commune' => ['required', 'string'],
        'quartier' => ['required', 'string'],
        'experience' => ['required', 'integer', 'min:0'],
        'description' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'adresse' => $data['adresse'],
        'telephone' => $data['telephone'],
        'email' => $data['email'],
        'metier' => $data['metier'],
        'pays' => $data['pays'],
        'ville' => $data['ville'],
        'commune' => $data['commune'],
        'quartier' => $data['quartier'],
        'experience' => $data['experience'],
        'description' => $data['description'],
        'password' => Hash::make($data['password']),
        ]);
    }
}
