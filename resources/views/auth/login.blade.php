@extends('layouts.app')

@section('title', 'Login | Leeh Costura Premium')

@section('content')
    <section class="login-container">

        <div class="login-image">
            <img src="{{ asset('images/costura.png') }}" alt="Costura Premium">
        </div>

        <div class="login-form">

            <h1>LEEH COSTURA PREMIUM</h1>

            <p>
                Entre para acessar o sistema de gestão da facção.
            </p>

            <form>

                <input type="email" placeholder="E-mail">

                <input type="password" placeholder="Senha">

                <button type="submit">
                    Entrar
                </button>

            </form>

        </div>

    </section>
@endsection