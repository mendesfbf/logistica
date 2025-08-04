@extends('layouts.main')

@section('content')

<h3>Listar Pessoas</h3>
<hr>
<div class="container mt-1 mb-3 d-flex">
    <a href="#" class="btn btn-primary px-5">Novo</a>
    </div>

    <table class="table table-dark table-bordered small">
        <thead>
          <tr class="fs-8">
            <th scope="col" class="table-secondary">#</th>
            <th scope="col" class="table-secondary">Id_fundional</th>
            <th scope="col" class="table-secondary">Nome</th>
            <th scope="col" class="table-secondary">Cargo</th>
            <th scope="col" class="table-secondary">Dados</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pessoas as $pessoa)   
          <tr class="fs-8 text-center">
    
            <td>{{$pessoa->id}}</td>
            <td>{{$pessoa->funcional}}</td>
            <td>{{$pessoa->nome}}</td>
            <td>{{$pessoa->cargo}}</td>
     
            <td>APAGAR-EDITAR</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
