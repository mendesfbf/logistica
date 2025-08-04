@extends('layouts.main_login')

@section('content')

    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 card p-5">
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <p class="display-6 text-center">Recuperar a Senha</p>
                <div class="mb-3">
                    <label for="email">Indique o seu Email para Recuperar a Senha:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <div>
                        <a href="{{ route('login') }}">Voltar ao Login</a>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary px-5">ENVIAR</button>
                    </div>
                </div>
            </form>

            {{-- Email Enviado  ---}}
            @if(session('status'))
                <p>Um Email Foi enviado para o seu endereço de e-mail com as instruções para recuperar a senha</p>
                <a href="{{ route('login') }}" class="btn btn-primary px-5"> Retornar ao Login</a> 
            @endif
        </div>
    </div>
</div>


@endsection

