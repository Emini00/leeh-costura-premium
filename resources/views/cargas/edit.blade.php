@extends('layouts.app')

@section('title', 'Editar Carga')

@section('content')

<section class="page-container">

    <h1>Editar Carga</h1>

    <form action="/cargas/{{ $carga->id }}"
        method="POST"
        class="form-container">

        @csrf
        @method('PUT')

        <input type="number"
            name="fabrica_id"
            value="{{ $carga->fabrica_id }}"
            required>

        <input type="text"
            name="modelo"
            value="{{ $carga->modelo }}"
            required>

        <input type="number"
            name="quantidade"
            value="{{ $carga->quantidade }}"
            required>

        <input type="number"
            step="0.01"
            name="valor_unitario"
            value="{{ $carga->valor_unitario }}"
            required>

        <select name="status">

            <option value="pendente"
                {{ $carga->status == 'pendente' ? 'selected' : '' }}>
                Pendente
            </option>

            <option value="em_producao"
                {{ $carga->status == 'em_producao' ? 'selected' : '' }}>
                Em Produção
            </option>

            <option value="finalizado"
                {{ $carga->status == 'finalizado' ? 'selected' : '' }}>
                Finalizado
            </option>

        </select>

        <button type="submit" class="cadastrar-btn">
            Atualizar Carga
        </button>

    </form>

</section>

@endsection