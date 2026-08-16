@extends('layouts.app')

@section('title', 'Fábricas | Leeh Costura Premium')

@section('content')

    <section class="page-container">

        <div class="page-header">

            <div class="page-title-actions">
                <h1>Lista de Fabricas</h1>

                <a href="/dashboard" class="back-button">
                    ←
                </a>
            </div>

            <a href="/fabricas/create" class="primary-button">
                + cadastrar fabrica
            </a>

        </div>
        <div class="employee-list">

            @foreach($fabricas as $fabrica)

                <div class="employee-item">

                    <strong>
                        {{ $fabrica->nome }}
                    </strong>

                    <span>
                        {{ $fabrica->telefone }}
                    </span>

                    <small>
                        {{ $fabrica->cidade }}
                    </small>

                    <div>

                        <a href="/fabricas/{{ $fabrica->id }}/edit" class="primary-button">

                            Editar

                        </a>

                        <form action="/fabricas/{{ $fabrica->id }}" method="POST" style="display:inline;">

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