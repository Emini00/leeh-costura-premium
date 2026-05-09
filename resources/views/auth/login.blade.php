@extends('layouts.app')

@section('title', 'Login | Leeh Costura Premium')

@section('content')

<section class="login-page">

    <div class="login-box">

        <h1>LEEH COSTURA</h1>

        <p>
            Gestão inteligente para sua facção de costura.
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