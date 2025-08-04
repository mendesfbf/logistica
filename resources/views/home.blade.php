@extends('layouts.main')

@section('content')

<h3>Seja bem vindo</h3>
<hr>

@can('verUsuario', App\Models\User::class)   
Administrador do Sistema       
@endcan





@endsection
