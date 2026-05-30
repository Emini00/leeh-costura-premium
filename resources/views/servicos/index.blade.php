@extends('layouts.app')

@section('title', 'Serviços | Leeh Costura Premium')

@section('content')


    <section class="page-container">

        <div class="page-header">

            <h1>Serviços</h1>

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

                        <span class="employee-status">
                            {{ $servico->status }}
                        </span>

                    </div>

                    <p>
                        <strong>Quantidade:</strong>
                        {{ $servico->quantidade }}
                    </p>

                    <p>
                        <strong>Modelo:</strong>
                        {{ $servico->modelo }}
                    </p>

                    <p>
                        <strong>Cor:</strong>
                        {{ $servico->cor }}
                    </p>

                    <p>
                        <strong>Tecido:</strong>
                        {{ $servico->tecido }}
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
                        <strong>Valor final:</strong>
                        R$ {{ $servico->valor_final }}
                    </p>

                    <p>
                        <strong>Observações:</strong>
                        {{ $servico->observacoes }}
                    </p>

                    <p>
                        <strong>Data de entrega:</strong>
                        {{ $servico->data_entrega }}
                    </p>

                    <div>

                        <a href="/servicos/{{ $servico->id }}/edit" class="primary-button">
                            Editar
                        </a>

                        <form action="/servicos/{{ $servico->id }}" method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="primary-button">
                                Excluir
                            </button>

                        </form>

                    </div>

                </div>
            @endforeach

        </div>

    </section>

@endsection



