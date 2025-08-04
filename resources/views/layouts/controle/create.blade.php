@extends('layouts.main')

@section('content')

<h3>Cadastrar Nova Retirada</h3>
<p>{{Auth::user()->name}}</p>

<hr>
<div class="container mt-1 mb-3 d-flex">
    <form action="{{ route('controle.store') }}" method="post">
        @csrf   

        <input type="hidden" name="txtresponsavel" value="{{Auth::user()->name}}">

        <label for="exampleFormControlInput1" class="form-label">Servidor</label>
        <select class="form-select" aria-label="Default select example" name="txtservidor">
          <option value="">Selecione</option>
          @foreach ($pessoas as $pessoa)
            <option value="{{$pessoa->id}}">{{$pessoa->nome." - ".$pessoa->funcional}}</option>
          @endforeach()
        
        </select>

          <label for="exampleFormControlInput1" class="form-label mt-3">Chave/Sala</label>
          <select class="form-select" aria-label="Default select example" name="txtsala">
            <option value="">Selecione</option>
            @foreach ($salas as $sala)
              <option value="{{$sala->id}}">{{$sala->chave." - ".$sala->descricao}}</option>
            @endforeach()
          
          </select>

            <label for="exampleFormControlInput1" class="form-label mt-3">Projetor/DataShow</label>
            <select class="form-select" aria-label="Default select example" name="txtprojetor">
              <option value="">Selecione</option>
            @foreach ($projetores as $projetor)
              <option value="{{$projetor->id}}">{{$projetor->numero." - ".$projetor->modelo}}
              </option>
            @endforeach()
          
          </select>

              <label for="exampleFormControlInput1" class="form-label mt-3">Notebook</label>
              <select class="form-select" aria-label="Default select example" name="txtnotebook">
                <option value="">Selecione</option>
                @foreach ($notebooks as $notebook)
                  <option value="{{$notebook->id}}">{{$notebook->numero." - ".$notebook->modelo}}
                  </option>
                @endforeach()
              
              </select>

                <div class="form-group mt-3">
                    <div class="col-sm-offset-2 col-sm-10">
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox1" name="txtextensao" value="S"> Extensão
                   </label>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox2" name="txtadaptador" value="S"> Adaptador
                   </label>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox3" name="txthdmi" value="S"> HDMI
                   </label>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox3" name="txtkitapagador" value="S"> KIT Apagador
                   </label>
                  
                 </div>

                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
 
</div>

@endsection
