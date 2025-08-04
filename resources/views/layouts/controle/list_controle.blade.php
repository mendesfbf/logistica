@extends('layouts.main')

@section('content')

<h3>Controle das Retiradas</h3>
<hr>
<div class="container mt-1 mb-3 d-flex">
    <a href="{{ route('controle.create') }}" class="btn btn-primary px-5">Novo</a>
    </div>
<form action="{{ route('controle.index') }}" method="get" style="width: 300px">
  <div class="input-group input-group-sm">
  <input type="text" name="keyword" id="txtbusca" class="form-control" placeholder="Digite o nome" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  <button type="submit" class="btn btn-primary">Buscar</button>
</div>
</form>



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<table class="table table-dark table-bordered small mt-3">
    <thead>
      <tr class="fs-8">
        <th scope="col" class="table-secondary">#</th>
        <th scope="col" class="table-secondary">Nome</th>
        <th scope="col" class="table-secondary">Chave/Sala</th>
        <th scope="col" class="table-secondary">Projetor</th>
        <th scope="col" class="table-secondary">Note</th>
        <th scope="col" class="table-secondary">Extensão</th>
        <th scope="col" class="table-secondary">Adaptador</th>
        <th scope="col" class="table-secondary">HDMI</th>
        <th scope="col" class="table-secondary">Kit Apagador</th>
        <th scope="col" class="table-secondary">Retirada</th>
        <th scope="col" class="table-secondary">Status</th>
        <th scope="col" class="table-secondary">Entrega</th>
        <th scope="col" class="table-secondary">Responsável</th>
        <th scope="col" class="table-secondary">Dados</th>
        
        

     
      </tr>
    </thead>
    <tbody>
      @foreach ($controles as $controle)   
      <tr class="fs-8 text-center">

        <td>{{$controle->id}}</td>
        <td>{{$controle->pessoas->nome}}</td>

        @if ($controle->salas_id == null)  
            <td> 0 </td>    
        @else
        <td>{{$controle->salas->chave."-".$controle->salas->descricao}}</td>
        @endif

        @if ($controle->projetores_id == null)  
            <td> 0 </td>
        @else
        <td>{{$controle->projetores->numero."-".$controle->projetores->modelo}}</td>
        @endif

        @if($controle->notebooks_id == null)
            <td> 0 </td>
        @else
        <td>{{$controle->notebooks->numero."-".$controle->notebooks->modelo}}</td>
        @endif
        
        <td>{{$controle->extensao}}</td>
        <td>{{$controle->adaptador}}</td>
        <td>{{$controle->hdmi}}</td>
        <td>{{$controle->kit_apagador}}</td>
        <td>{{date("d/m/Y H:i:s", strtotime($controle->created_at))}}</td>
        <td>{{$controle->status}}</td>

        @if ($controle->updated_at == null)
             <td> 0 </td>    
          @else
          <td>{{date("d/m/Y H:i:s", strtotime($controle->updated_at))}}</td>
          @endif

        <td>{{$controle->responsavel}}</td>
        <td>
          <a href="{{ route('controle.update', $controle->id) }}" class="btn btn-success btn-sm mt-1"><i class="bi bi-check-circle"></i></a>

          <a href="{{ route('controle.destroy', $controle->id) }}" class="btn btn-danger btn-sm mt-2"><i class="bi bi-trash"></i></a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
