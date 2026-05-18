@extends('layouts.app')

@section('title', 'Nova Carga')

@section('content')

    <section class="page-container">

        <h1>Nova Carga</h1>

        <form action="/cargas" method="POST" class="form-container">

            @csrf

            <select name="fabrica_id" required>

                <option value="">
                    Selecione a Fábrica
                </option>

                @foreach($fabricas as $fabrica)

                    <option value="{{ $fabrica->id }}">

                        {{ $fabrica->nome }}

                    </option>

                @endforeach

            </select>
            <input type="text" name="numero" placeholder="Número da carga">

            <input type="text" name="modelo" placeholder="Modelo do sofá" required>

            <input type="number" name="quantidade" placeholder="Quantidade" required>

            <input type="number" step="0.01" name="valor_unitario" placeholder="Valor Unitário" required>

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