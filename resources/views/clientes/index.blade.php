@extends('layouts.app')

@section('title', 'Clientes | Leeh Costura Premium')

@section('content')

<section class="page-container">

    <div class="page-header">
        <h1>Clientes</h1>

        <a href="/clientes/create" class="primary-button">
            + Cadastrar Cliente
        </a>
    </div>

    <div class="table-card">

        <h2>Lista de Clientes</h2>

        <div class="employee-list">

            @foreach($clientes as $cliente)

                <div class="employee-item">

                    <div class="employee-top">
                        <strong>{{ $cliente->nome }}</strong>
                        <span class="employee-status">Ativo</span>
                    </div>

                    <span>Telefone: {{ $cliente->telefone }}</span>
                    <small>Email: {{ $cliente->email }}</small>
                    <small>Cidade: {{ $cliente->cidade }}</small>

                    <div>
                        <a href="/clientes/{{ $cliente->id }}/edit" class="primary-button">
                            Editar
                        </a>

                        <form action="/clientes/{{ $cliente->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="primary-button" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                Excluir
                            </button>
                        </form>
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection