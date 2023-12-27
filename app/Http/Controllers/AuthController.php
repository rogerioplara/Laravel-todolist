<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        /*
        regras para registro
        - usuário tem que ter um nome
        - email tem que ser único na tabela users
        - todos os campos são required
        - password tem que ter no mínimo 6 caracteres
        */

        // validador do laravel
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only('name', 'email', 'password');

        // sobrescrevendoa a variável password no array e salvando como hash
        $data['password'] = Hash::make($data['password']);
        // no laravel10 já é feito um cast no model de user que faz essa função do hash - deixar aqui para referência futura
        User::create($data);

        return redirect(route('login'));
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        dd($validator);
    }
}
