@extends('layouts.app')

@section('title', 'Login | Leeh Costura Premium')

@section('content')

    <section class="login-page">



        <div class="login-box">

            <img src="{{ asset('images/leeh-logo-intro.jpeg') }}" alt="Leeh Costura Premium" class="login-logo">


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