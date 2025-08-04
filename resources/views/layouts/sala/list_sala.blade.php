@extends('layouts.main')

@section('content')

<h3>Listar Salas e Chaves</h3>
<hr>
<div class="container mt-1 mb-3 d-flex">
    <a href="#" class="btn btn-primary px-5">Novo</a>
    </div>

    <table class="table table-dark table-bordered small">
        <thead>
          <tr class="fs-8">
            <th scope="col" class="table-secondary">#</th>
            <th scope="col" class="table-secondary">Chave</th>
            <th scope="col" class="table-secondary">Descrição de Salas</th>
            <th scope="col" class="table-secondary">Dados</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($salas as $sala)   
          <tr class="fs-8 text-center">
    
            <td>{{$sala->id}}</td>
            <td>{{$sala->chave}}</td>
            <td>{{$sala->descricao}}</td>
     
            <td>APAGAR-EDITAR</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
