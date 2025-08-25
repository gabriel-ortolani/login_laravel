<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function cadastro(){
        echo view("user.cadastro");
    }
    public function login(){
        echo view("user.login");
    }
    public function home(){
        echo view("user.home");
    }
    public function edit(){
        echo view("user.edit");
    }
    public function verificacao(){
        echo view("user.verificacao");
    }

    public function cadastrar(request $request){

        // dd ($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->senha)
        ]);
        return redirect()->route('user.login');

    }

    public function logar(request $request){
        // dd ($request->all());
        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->senha, $user->password)){
            // echo "Logado com sucesso";
            return redirect()->route('user.home');
        }else{
            // echo "Erro ao logar";
            return redirect()->route('user.login');
        }
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if($user){
            // Passa o usuário para a view edit
            return view('user.edit', compact('user'));
        }else{
            return back()->withErrors(['email' => 'Email não encontrado.'])->withInput();
        }        
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'senha' => 'nullable|string|min:3'
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if($user){
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            if($request->filled('senha')) {
                $user->password = Hash::make($request->input('senha'));
            }
            $user->save();

            return redirect()->route('user.login');
        }else{
            return back()->withErrors(['email' => 'Usuário não encontrado.'])->withInput();
        }
    }
}
