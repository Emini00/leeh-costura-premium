@extends('layouts.app')

@section('title', 'Editar Fábrica')

@section('content')

    <section class="page-container">

        <h1>Editar Fábrica</h1>

        <form action="/fabricas/{{ $fabrica->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')

            <input type="text" name="nome" value="{{ $fabrica->nome }}" required>

            <input type="text" name="telefone" value="{{ $fabrica->telefone }}">

            <input type="text" name="cidade" value="{{ $fabrica->cidade }}">

            <button type="submit" class="cadastrar-btn">

                Atualizar Fábrica

            </button>

        </form>

    </section>

@endsection