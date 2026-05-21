@extends('layouts.app')

@section('title', 'Editar Carga')

@section('content')

    <section class="page-container">

        <h1>Editar Carga</h1>

        <form action="/cargas/{{ $carga->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')
              <label>Fábrica</label>
            <input type="number" name="fabrica_id" value="{{ $carga->fabrica_id }}" required>
              <label>Modelo</label>
            <input type="text" name="modelo" value="{{ $carga->modelo }}" required>
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