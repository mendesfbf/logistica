@extends('layouts.main')

@section('content')

<h3>Listar Usuários</h3>
<hr>
<div class="container mt-1 mb-3 d-flex">
    <a href="{{ route('user.create') }}" class="btn btn-primary px-5">Novo</a>
    </div>

    @session ('status')
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endsession


    <table class="table table-dark table-bordered small">
        <thead>
          <tr class="fs-8">
            <th scope="col" class="table-secondary">#</th>
            <th scope="col" class="table-secondary">Nome</th>
            <th scope="col" class="table-secondary">Email</th>
            <th scope="col" class="table-secondary">Permissao</th>
            <th scope="col" class="table-secondary">Dados</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)   
          <tr class="fs-8 text-center">
    
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
     
            <td><a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>

              <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
