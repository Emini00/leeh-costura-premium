@extends('layouts.app')

@section('title', 'Nova Carga')

@section('content')

    <section class="page-container">

        <h1>Nova Carga</h1>
        <a href="{{ url()->previous() }}" class="back-button">
            ←
        </a>

        <form action="/cargas" method="POST" class="form-container">

            @csrf
            <label>Fabrica</label>
            <input type="number" name="fabrica_id" placeholder="ID da Fábrica" required>
            <label>modelo do Sofá</label>
            <input type="text" name="modelo" placeholder="Modelo do sofá" required>
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