@extends('layouts.app')

@section('title', 'Editar Carga')

@section('content')

    <section class="page-container">

        <h1>Editar Carga</h1>

        <a href="/cargas" class="back-button">
            ←
        </a>

        <form action="/cargas/{{ $carga->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')
            <label>Fábrica</label>

            <select name="fabrica_id" required>
                <option value="">Selecione uma fábrica</option>

                @foreach($fabricas as $fabrica)
                    <option value="{{ $fabrica->id }}" {{ $carga->fabrica_id == $fabrica->id ? 'selected' : '' }}>
                        {{ $fabrica->nome }}
                    </option>
                @endforeach
            </select>
            <label>Modelo</label>
            <input type="text" name="modelo" value="{{ $carga->modelo }}" required>
            <label>Módulo</label>

            <select name="modulo">
                <option value="">Selecione o módulo</option>
                <option value="70 cm">70 cm</option>
                <option value="80 cm">80 cm</option>
                <option value="90 cm">90 cm</option>
                <option value="1,00 m">1,00 m</option>
                <option value="1,20 m">1,20 m</option>
            </select>
            <label>Quantidade</label>
            <input type="number" name="quantidade" value="{{ $carga->quantidade }}" required>
            <label>Vr. Unitário</label>
            <input type="number" step="0.01" name="valor_unitario" value="{{ $carga->valor_unitario }}" required>
            <label>Status</label>
            <select name="status">

                <option value="pendente" {{ $carga->status == 'pendente' ? 'selected' : '' }}>
                    Pendente
                </option>

                <option value="em_producao" {{ $carga->status == 'em_producao' ? 'selected' : '' }}>
                    Em Produção
                </option>

                <option value="finalizado" {{ $carga->status == 'finalizado' ? 'selected' : '' }}>
                    Finalizado
                </option>

            </select>

            <button type="submit" class="cadastrar-btn">
                Atualizar Carga
            </button>

        </form>

    </section>

@endsection