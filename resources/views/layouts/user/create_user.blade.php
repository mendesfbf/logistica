@extends('layouts.main')

@section('content')

<h3>Cadastrar Novo Usuário</h3>
<hr>

<form action="{{ route('user.store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" class="form-control @error ('name') is-invalid @enderror" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
      @error('email')   
      <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error ('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
      @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Permissao</label>
    <select class="form-select" aria-label="Default select example" name="role">
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select>
    </div>
 
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>


@endsection
