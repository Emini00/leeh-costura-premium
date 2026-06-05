@extends('layouts.app')

@section('title', 'Cadastrar Serviço')

@section('content')

    <section class="page-container">

        <h1>Cadastrar Serviço</h1>
        <a href="/servicos" class="back-button">
            ←
        </a>



        <form action="/servicos" method="POST" class="form-container">

            @csrf

            <label>Funcionário</label>
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
            <label>Carga</label>
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


            <label>Modelo</label>
            <input type="text" name="modelo" placeholder="Modelo">

            <label>Módulo</label>

            <select name="modulo">
                <option value="">Selecione o módulo</option>
                <option value="70 cm">70 cm</option>
                <option value="80 cm">80 cm</option>
                <option value="90 cm">90 cm</option>
                <option value="1,00 m">1,00 m</option>
                <option value="1,20 m">1,20 m</option>
            </select>
            <label>cor</label>
            <input type="text" name="cor" placeholder="Cor">
            <label>tipo de tecido</label>
            <input type="text" name="tecido" placeholder="Tipo de tecido">
            <label>quantidade</label>
            <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" required>
            <label>Valor Unitário</label>
            <input type="number" step="0.01" name="valor_unitario" id="valor_unitario" placeholder="Valor Unitário">
            <label>Valor Total</label>
            <input type="number" step="0.01" name="valor_total" id="valor_total" placeholder="Valor Total" readonly>
            <label>Desconto</label>
            <input type="number" step="0.01" name="desconto" id="desconto" placeholder="Desconto">
            <label> Motivo doDesconto</label>
            <input type="text" name="motivo_desconto" placeholder="Motivo do desconto">
            <label>Acréscimo</label>
            <input type="number" step="0.01" name="acrescimo" id="acrescimo" placeholder="Acréscimo">
            <label>Motivo do Acréscimo</label>
            <input type="text" name="motivo_acrescimo" placeholder="Motivo do acréscimo">

            <label>Valor final</label>
            <input type="number" step="0.01" name="valor_final" id="valor_final" placeholder="Valor final" readonly>
            <label>Observações</label>
            <textarea name="observacoes" placeholder="Observações"></textarea>
            <label>Data de Entrega</label>
            <input type="date" name="data_entrega">
            <label>Status</label>
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