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
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

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
            'commune' => ['nullable', 'string'], // Commune peut être nul selon les spécifications
            'quartier' => ['required', 'string'],
            'experience' => ['required', 'integer', 'min:0'],
            'description' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

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
            'commune' => $data['commune'], // Assurez-vous que ce champ est bien inclus ici
            'quartier' => $data['quartier'],
            'experience' => $data['experience'],
            'description' => $data['description'],
            'password' => Hash::make($data['password']),
        ]);
    }
}


