@extends('layouts.app')

@section('title', 'Editar Fábrica')

@section('content')

    <section class="page-container">

        <h1>Editar Fábrica</h1>

        <form action="/fabricas/{{ $fabrica->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')
            <label>nome da Fabrica</label>
            <input type="text" name="nome" value="{{ $fabrica->nome }}" required>
            <label>Telefone</label>
            <input type="text" name="telefone" value="{{ $fabrica->telefone }}">
            <label>Cidade</label>
            <input type="text" name="cidade" value="{{ $fabrica->cidade }}">

            <button type="submit" class="cadastrar-btn">

                Atualizar Fábrica

            </button>

        </form>

    </section>

@endsection