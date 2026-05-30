@extends('layouts.app')

@section('title', 'Editar Serviço')

@section('content')

    <section class="page-container">

        <h1>Editar Serviço</h1>

        <form action="/servicos/{{ $servico->id }}" method="POST" class="form-container">

            @csrf
            @method('PUT')

            <label>Funcionário</label>
            <select name="funcionario_id" required>
                @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}" {{ $servico->funcionario_id == $funcionario->id ? 'selected' : '' }}>
                        {{ $funcionario->nome }}
                    </option>
                @endforeach
            </select>

            <label>Carga</label>
            <input type="number" name="carga_id" value="{{ $servico->carga_id }}" required>

            <label>Modelo</label>
            <input type="text" name="modelo" value="{{ $servico->modelo }}" placeholder="Modelo">

            <label>Cor</label>
            <input type="text" name="cor" value="{{ $servico->cor }}" placeholder="Cor">

            <label>Tecido</label>
            <input type="text" name="tecido" value="{{ $servico->tecido }}" placeholder="Tipo de tecido">

            <label>Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" value="{{ $servico->quantidade }}" required>

            <label>Valor unitário</label>
            <input type="number" step="0.01" name="valor_unitario" id="valor_unitario"
                value="{{ $servico->valor_unitario }}" placeholder="Valor Unitário">

            <label>Valor total</label>
            <input type="number" id="valor_total" step="0.01" name="valor_total" required>

            <label>Desconto</label>
            <input type="number" step="0.01" name="desconto" id="desconto" value="{{ $servico->desconto }}"
                placeholder="Desconto">

            <label>Motivo do desconto</label>
            <input type="text" name="motivo_desconto" value="{{ $servico->motivo_desconto }}"
                placeholder="Motivo do desconto">

            <label>Acréscimo</label>
            <input type="number" step="0.01" name="acrescimo" id="acrescimo" value="{{ $servico->acrescimo }}"
                placeholder="Acréscimo">

            <label>Motivo do acréscimo</label>
            <input type="text" name="motivo_acrescimo" value="{{ $servico->motivo_acrescimo }}"
                placeholder="Motivo do acréscimo">

            <label>Valor final</label>
            <input type="number" step="0.01" name="valor_final" id="valor_final" value="{{ $servico->valor_final }}"
                readonly>

            <label>Observações</label>
            <textarea name="observacoes" placeholder="Observações">{{ $servico->observacoes }}</textarea>

            <label>Data de entrega</label>

            <input type="date" name="data_entrega" value="{{ $servico->data_entrega }}">

            <label>Status</label>

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

            </select>

            <button type="submit" class="cadastrar-btn">
                Atualizar Serviço
            </button>

        </form>

    </section>

@endsection