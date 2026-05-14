@extends('layouts.app')

@section('title', 'Cadastrar Serviço')

@section('content')

<section class="page-container">

    <h1>Novo Serviço</h1>

    <form action="/servicos"
        method="POST"
        class="form-container">

        @csrf

        <input type="number"
            name="funcionario_id"
            placeholder="ID Funcionário"
            required>

        <input type="number"
            name="carga_id"
            placeholder="ID Carga"
            required>

        <input type="number"
            name="quantidade"
            placeholder="Quantidade"
            required>

        <input type="number"
            step="0.01"
            name="valor_total"
            placeholder="Valor Total"
            required>

        <select name="status">

            <option value="em_producao">
                Em Produção
            </option>

            <option value="finalizado">
                Finalizado
            </option>

            <option value="entregue">
                Entregue
            </option>

        </select>

        <button type="submit" class="cadastrar-btn">
            Salvar Serviço
        </button>

    </form>

</section>

@endsection