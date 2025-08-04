@extends('layouts.main')

@section('content')

<h3>Listar Notebooks e Netbooks</h3>
<hr>
<div class="container mt-1 mb-3 d-flex">
    <a href="#" class="btn btn-primary px-5">Novo</a>
    </div>

    <table class="table table-dark table-bordered small">
        <thead>
          <tr class="fs-8">
            <th scope="col" class="table-secondary">#</th>
            <th scope="col" class="table-secondary">Patrimônio</th>
            <th scope="col" class="table-secondary">Marca/Modelo</th>
            <th scope="col" class="table-secondary">Dados</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notebooks as $notebook)   
          <tr class="fs-8 text-center">
    
            <td>{{$notebook->id}}</td>
            <td>{{$notebook->numero}}</td>
            <td>{{$notebook->modelo}}</td>
     
            <td>APAGAR-EDITAR</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
