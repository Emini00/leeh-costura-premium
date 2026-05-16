@extends('layouts.app')

@section('title', 'Cadastrar Serviço')

@section('content')

    <section class="page-container">

        <h1>Novo Serviço</h1>

        <form action="/servicos" method="POST" class="form-container">

            @csrf

            <select name="funcionario_id" required>

                <option value="">
                    Selecione o Funcionário
                </option>

                @foreach($funcionarios as $funcionario)

                    <option value="{{ $funcionario->id }}">

                        {{ $funcionario->nome }}

                    </option>

                @endforeach

            </select>

            <select name="carga_id" required>

                <option value="">
                    Selecione a Carga
                </option>

                @foreach($cargas as $carga)

                    <option value="{{ $carga->id }}">

                        Carga #{{ $carga->id }}
                        - {{ $carga->modelo }}

                    </option>

                @endforeach

            </select>

            <input type="text" name="nome_sofa" placeholder="Nome do sofá">

            <input type="text" name="modelo" placeholder="Modelo">

            <input type="text" name="cor" placeholder="Cor">

            <input type="text" name="tecido" placeholder="Tipo de tecido">

            <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" required>


            <input type="number" step="0.01" name="valor_unitario" id="valor_unitario" placeholder="Valor Unitário">

            <input type="number" step="0.01" name="valor_total" id="valor_total" placeholder="Valor Total" readonly>

            <textarea name="observacoes" placeholder="Observações"></textarea>

            <input type="date" name="data_entrega">

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



    <script src="{{ asset('js/servicos.js') }}"></script>

@endsection