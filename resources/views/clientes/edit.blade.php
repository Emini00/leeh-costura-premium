@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')

    <section class="page-container">

        <h1>Editar Cliente</h1>

        <form action="/clientes/{{ $cliente->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')
             <label>Nome do Cliente</label>
            <input type="text" name="nome" value="{{ $cliente->nome }}" placeholder="Nome do cliente" required>
             <label>Telefone</label>
            <input type="text" name="telefone" value="{{ $cliente->telefone }}" placeholder="Telefone" required>
             <label>E-mail</label>
            <input type="email" name="email" value="{{ $cliente->email }}" placeholder="E-mail">
             <label>Cidade</label>
            <input type="text" name="cidade" value="{{ $cliente->cidade }}" placeholder="Cidade">

            <button type="submit" class="cadastrar-btn">
                Atualizar Cliente
            </button>

        </form>

    </section>

@endsection