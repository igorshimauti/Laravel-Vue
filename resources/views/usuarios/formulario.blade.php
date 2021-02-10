@extends('templates.main')

@section('content')
    <h1>
        @isset($reg_usuario)
            Editar usuário
        @else
            Novo usuário
        @endisset
    </h1>
    <form @isset($reg_usuario) action="{{route('usuarios.update', $reg_usuario->id)}}" @else action="{{route('usuarios.insert')}}" @endisset method="POST">
        @method('PUT')
        @csrf

        <div class="form-row">
            <label for="codigo">Código</label>
            <input id="codigo" name="codigo" @isset($reg_usuario) value="{{$reg_usuario->codigo}}" @else value="{{$codigo}}" @endisset type="text" class="form-control">
        </div>
        <div class="form-row">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" @isset($reg_usuario) value="{{$reg_usuario->nome}}" @else value="" @endisset type="text" class="form-control">
        </div>
        <div class="form-row">
            <label for="sobrenome">Sobrenome</label>
            <input id="sobrenome" name="sobrenome" @isset($reg_usuario) value="{{$reg_usuario->sobrenome}}" @else value="" @endisset type="text" class="form-control">
        </div>
        <div class="form-row">
            <label for="cpf">CPF</label>
            <input-cpf id="cpf" name="cpf" @isset($reg_usuario) value="{{$reg_usuario->cpf}}" @else value="" @endisset class="form-control"></input-cpf>
        </div>
        <div class="form-row">
            <label for="email">E-mail</label>
            <input id="email" name="email" @isset($reg_usuario) value="{{$reg_usuario->email}}" @else value="" @endisset type="text" class="form-control">
        </div>
        <div class="form-row">
            <label for="senha">Senha</label>
            <input id="senha" name="senha" @isset($reg_usuario) value="{{$reg_usuario->senha}}" @else value="" @endisset type="password" class="form-control">
        </div>
        <div class="form-row">
            <button type="submit" class="btn-primary form-control">Salvar</button>
        </div>
    </form>
@endsection