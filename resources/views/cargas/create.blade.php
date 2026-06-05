@extends('layouts.app')

@section('title', 'Nova Carga')

@section('content')

    <section class="page-container">

        <h1>Cadastrar Carga</h1>
        <a href="{{ url()->previous() }}" class="back-button">
            ←
        </a>

        <form action="/cargas" method="POST" class="form-container">

            @csrf
            <label>Fábrica</label>

            <select name="fabrica_id" required>
                <option value="">Selecione uma fábrica</option>

                @foreach($fabricas as $fabrica)
                    <option value="{{ $fabrica->id }}">
                        {{ $fabrica->nome }}
                    </option>
                    <to_cargas_table class="php"></to_cargas_table>
                @endforeach
            </select>

            <label>Identificação da Carga</label>

            <input type="text" name="identificacao" placeholder="Ex: 92, Carga A, Urgente">
            <label>modelo</label>
            <input type="text" name="modelo" placeholder="Modelo do sofá" required>
            <label>Módulo</label>
            <select name="modulo">
                <option value="">Selecione o módulo</option>
                <option value="70 cm">70 cm</option>
                <option value="80 cm">80 cm</option>
                <option value="90 cm">90 cm</option>
                <option value="1,00 m">1,00 m</option>
                <option value="1,20 m">1,20 m</option>
            </select>
            <label>quantidade</label>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <label>Vr. Unitario</label>
            <input type="number" step="0.01" name="valor_unitario" placeholder="Valor Unitário" required>
            <label>status</label>

            <select name="status">

                <option value="pendente">
                    Pendente
                </option>

                <option value="em_producao">
                    Em Produção
                </option>

                <option value="finalizado">
                    Finalizado
                </option>

            </select>

            <button type="submit" class="cadastrar-btn">
                Salvar Carga
            </button>

        </form>

    </section>

@endsection