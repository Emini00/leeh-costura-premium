@extends('layouts.app')

@section('title', 'Serviços | Leeh Costura Premium')

@section('content')


    <section class="page-container">

       <div class="page-header">

    <div class="page-title-actions">
        <h1>Lista de Serviços</h1>

        <a href="/dashboard" class="back-button">
            ←
        </a>
    </div>

    <a href="/servicos/create" class="primary-button">
        + Novo Serviço
    </a>

</div>
        <div class="employee-list">

            @foreach($servicos as $servico)

                <div class="employee-item">

                    <div class="employee-top">

                        <strong>
                            Serviço #{{ $servico->id }}
                        </strong>

                    </div>

                    <div class="employee-status">

                        <div class="status-dots">

                            @if($servico->status == 'em_producao')
                                <span style="color:#dc2626;">●</span>
                                <span style="color:#d6d6d6;">●</span>
                                <span style="color:#d6d6d6;">●</span>

                            @elseif($servico->status == 'finalizado')
                                <span style="color:#d6d6d6;">●</span>
                                <span style="color:#eab308;">●</span>
                                <span style="color:#d6d6d6;">●</span>

                            @elseif($servico->status == 'entregue')
                                <span style="color:#d6d6d6;">●</span>
                                <span style="color:#d6d6d6;">●</span>
                                <span style="color:#2563eb;">●</span>
                            @endif

                        </div>

                        <span>
                            {{ str_replace('_', ' ', ucfirst($servico->status)) }}
                        </span>

                    </div>
                    <p>
                        <strong>Funcionário:</strong>
                        {{ $servico->funcionario->nome ?? 'Não informado' }}
                    </p>

                    <p>
                        <strong>Quantidade:</strong>
                        {{ $servico->quantidade }}
                    </p>

                    <p>
                        <strong>Modelo:</strong>
                        {{ $servico->modelo }}
                    </p>

                    <p>
                        <strong>Valor final:</strong>
                        R$ {{ number_format($servico->valor_final, 2, ',', '.') }}
                    </p>

                    <details>
                        <summary>Detalhes</summary>
                        <p>
                            <strong>Tecido:</strong>
                            {{ $servico->tecido }}
                        </p>

                        <p>
                            <strong>Cor:</strong>
                            {{ $servico->cor }}
                        </p>
                        <p>
                            <strong>Valor unitário:</strong>
                            R$ {{ $servico->valor_unitario }}
                        </p>

                        <p>
                            <strong>Valor total:</strong>
                            R$ {{ $servico->valor_total }}
                        </p>

                        <p>
                            <strong>Desconto:</strong>
                            R$ {{ $servico->desconto }}
                        </p>

                        <p>
                            <strong>Motivo do desconto:</strong>
                            {{ $servico->motivo_desconto }}
                        </p>

                        <p>
                            <strong>Acréscimo:</strong>
                            R$ {{ $servico->acrescimo }}
                        </p>

                        <p>
                            <strong>Motivo do acréscimo:</strong>
                            {{ $servico->motivo_acrescimo }}
                        </p>

                        <p>
                            <strong>Observações:</strong>
                            {{ $servico->observacoes }}
                        </p>

                    </details>






                    <p>
                        <strong>Data de entrega:</strong>
                        {{ \Carbon\Carbon::parse($servico->data_entrega)->format('d/m/Y') }}
                    </p>

                    <div>

                        <a href="/servicos/{{ $servico->id }}/edit" class="primary-button action-button">
                            Editar
                        </a>

                        <form action="/servicos/{{ $servico->id }}" method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="primary-button action-button">
                                Excluir
                            </button>

                        </form>

                    </div>

                </div>
            @endforeach

        </div>

    </section>

@endsection