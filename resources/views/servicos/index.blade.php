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
    <div class="data-table-wrapper">

        <table class="data-table">

            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Nome do sofá</th>
                    <th>Modelo</th>
                    <th>Quantidade</th>
                    <th>Cor</th>
                    <th>Tecido</th>
                    <th>Valor unitário</th>
                    <th>Valor total</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach($servicos as $servico)

                    <tr>
                        <td>#{{ $servico->id }}</td>

                        <td>{{ $servico->nome_sofa }}</td>

                        <td>{{ $servico->modelo }}</td>

                        <td>{{ $servico->quantidade }}</td>

                        <td>{{ $servico->cor }}</td>

                        <td>{{ $servico->tecido }}</td>

                        <td>
                            R$ {{ number_format($servico->valor_unitario, 2, ',', '.') }}
                        </td>

                        <td>
                            R$ {{ number_format($servico->valor_total, 2, ',', '.') }}
                        </td>

                        <td>
                            <span class="employee-status">
                                {{ $servico->status }}
                            </span>
                        </td>

                        <td>
                            <div class="data-table-actions">

                                <a href="/servicos/{{ $servico->id }}/edit" class="primary-button">
                                    Editar
                                </a>

                                <form action="/servicos/{{ $servico->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="primary-button">
                                        Excluir
                                    </button>

                                    </form>

                                    </div>
                                    </td>
                                    </tr>

                @endforeach

                                    </tbody>

                                    </table>

                                    </div>
                                    <div class="services-summary">

                                        <div class="summary-card">
                                            <span>Total de peças / conjuntos</span>
                                            <strong>{{ $totalPecas }}</strong>
                                        </div>

                                        <div class="summary-card">
                                            <span>Total geral</span>
                                            <strong>
                                                R$ {{ number_format($totalGeral, 2, ',', '.') }}
                                            </strong>
                                        </div>

                                    </div>

                                    </section>

@endsection