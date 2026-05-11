@extends('layouts.app')

@section('title', 'Login | Leeh Costura Premium')

@section('content')

    <section class="login-page">

        <div class="login-box">

            <h1>LEEH COSTURA</h1>

            <p>
                Gestão inteligente para sua facção de costura.
            </p>

            <form action="/login" method="POST">

                @csrf

                <input type="text" name="usuario" placeholder="Usuário" required>

                <input type="password" name="senha" placeholder="Senha" required>

                <button type="submit" class="primary-button">
                    Entrar
                </button>
            </form>

        </div>

    </section>

@endsection