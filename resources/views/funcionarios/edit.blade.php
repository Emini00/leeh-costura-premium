@extends('layouts.app')

@section('title', 'Editar Funcionário')

@section('content')
    <section class="page-container">

        <h1>Editar Funcionário</h1>

        <form action="/funcionarios/{{ $funcionario->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')

            <input type="text" name="nome" value="{{ $funcionario->nome }}" placeholder="Nome do funcionário"required>

            <input type="text" name="telefone" value="{{ $funcionario->telefone }}" placeholder="Telefone"required>

            <input type="text" name="cargo" value="{{ $funcionario->cargo }}" placeholder="Cargo"required>

            <input type="text" name="usuario" value="{{ $funcionario->usuario }}" placeholder="Usuário"required>

            <input type="password" name="senha" placeholder="Nova senha"required>

            <button type="submit">
                Atualizar Funcionário
            </button>

        </form>

    </section>
@endsection