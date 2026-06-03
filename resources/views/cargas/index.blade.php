@extends('layouts.app')

@section('title', 'Cargas | Leeh Costura Premium')

@section('content')

<section class="page-container">

    <div class="page-header">

        <h1>Cargas</h1>

        <a href="/cargas/create" class="primary-button">
            + Cadastrar Carga
        </a>

    </div>

    <div class="employee-list">

        @foreach($cargas as $carga)

            <div class="employee-item">

                <div class="employee-top">

                    <strong>
                        {{ $carga->modelo }}
                    </strong>

                    <span class="employee-status">
                        {{ $carga->status }}
                    </span>

                </div>

                <span>
                    Quantidade:
                    {{ $carga->quantidade }}
                </span>

                <small>
                    Valor Unitário:
                    R$ {{ $carga->valor_unitario }}
                </small>

                <div>

                    <a href="/cargas/{{ $carga->id }}/edit"
                        class="primary-button">

                        Editar

                    </a>

                    <form action="/cargas/{{ $carga->id }}"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            class="primary-button">

                            Excluir

                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection