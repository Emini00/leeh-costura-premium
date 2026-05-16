@extends('layouts.app')

@section('title', 'Editar Serviço')

@section('content')

    <section class="page-container">

        <h1>Editar Serviço</h1>

        <form action="/servicos/{{ $servico->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')

            <input type="number" name="funcionario_id" value="{{ $servico->funcionario_id }}" required>

            <input type="number" name="carga_id" value="{{ $servico->carga_id }}" required>
            <input type="text" name="nome_sofa" value="{{ $servico->nome_sofa }}" placeholder="Nome do sofá">

            <input type="text" name="modelo" value="{{ $servico->modelo }}" placeholder="Modelo">

            <input type="text" name="cor" value="{{ $servico->cor }}" placeholder="Cor">

            <input type="text" name="tecido" value="{{ $servico->tecido }}" placeholder="Tipo de tecido">

            <input type="number" name="quantidade" value="{{ $servico->quantidade }}" required>

            <input type="number" step="0.01" name="valor_total" value="{{ $servico->valor_total }}" required>
            <input type="number" step="0.01" name="valor_unitario" value="{{ $servico->valor_unitario }}"
                placeholder="Valor Unitário">

            <textarea name="observacoes" placeholder="Observações">{{ $servico->observacoes }}</textarea>

            <input type="date" name="data_entrega" value="{{ $servico->data_entrega }}">

            <select name="status">

                <option value="em_producao" {{ $servico->status == 'em_producao' ? 'selected' : '' }}>
                    Em Produção
                </option>

                <option value="finalizado" {{ $servico->status == 'finalizado' ? 'selected' : '' }}>
                    Finalizado
                </option>

                <option value="entregue" {{ $servico->status == 'entregue' ? 'selected' : '' }}>
                    Entregue
                </option>

            </select>

            <button type="submit" class="cadastrar-btn">
                Atualizar Serviço
            </button>

        </form>

    </section>

@endsection