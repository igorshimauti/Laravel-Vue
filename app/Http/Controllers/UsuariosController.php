<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller {

    public function lista() {
        $usuarios = User::All();
        return view('usuarios.lista', compact('usuarios'));
    }

    public function incluir() {
        $nextId = User::max('id');
        $codigo = str_pad($nextId + 1, 5, '0', STR_PAD_LEFT);
        return view('usuarios.formulario', compact('codigo'));
    }

    public function editar($id) {
        $reg_usuario = User::find($id);
        return view('usuarios.formulario', compact('reg_usuario'));
    }

    public function insert(Request $request) {
        User::create([
            "codigo" => $request->codigo,
            "nome" => $request->nome,
            "sobrenome" => $request->sobrenome,
            "cpf" => $request->cpf,
            "email" => $request->email,
            "senha" => $request->senha
        ]);
        return redirect()->route('usuarios')->withSuccess('Usuário cadastrado com sucesso!');
    }

    public function update(Request $request) {
        $reg_usuario = User::find($request->id);
        $reg_usuario->where("id", $request->id)
                    ->update([
                        "codigo"=>$request->codigo,
                        "nome" => $request->nome,
                        "sobrenome" => $request->sobrenome,
                        "cpf" => $request->cpf,
                        "email" => $request->email,
                        "senha" => $request->senha
                    ]);
        return redirect()->route('usuarios')->withSuccess('Usuário alterado com sucesso!');
    }

    public function delete(Request $request) {
        $reg_usuario = User::find($request->id);
        $reg_usuario->delete();
        return redirect()->route('usuarios')->withSuccess('Usuário excluído com sucesso!');
    }
}