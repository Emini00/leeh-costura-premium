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

                    <span>
                        Quantidade:
                        {{ $servico->quantidade }}
                    </span>
                    <br>

                    Nome do sofá:
                    {{ $servico->nome_sofa }}

                    <br>

                    Modelo:
                    {{ $servico->modelo }}

                    <br>

                    Cor:
                    {{ $servico->cor }}

                    <br>

                    Tecido:
                    {{ $servico->tecido }}

                    <br>

                    Valor unitário:
                    R$ {{ $servico->valor_unitario }}

                    <small>
                        Valor:
                        R$ {{ $servico->valor_total }}
                    </small>

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