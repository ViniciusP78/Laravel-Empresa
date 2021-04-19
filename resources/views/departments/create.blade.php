@extends('master')
 
@section('content')
<h1>Departamento</h1>
<a class="ui button basic" href="{{ route('departments.index') }}"><i class="arrow left icon"></i>Voltar</a>
<div class="ui attached message">
  <div class="header">
    Adicionar Departamento
  </div>
</div>
  <form action="{{ route('departments.store') }}" class="ui form attached segment" method="POST">
    @csrf
    <div class="field">
      <label>Nome do departamento</label>
      <input type="text" name="name" placeholder="Departamento">
    </div>
    <button class="ui button" type="submit">Enviar</button>

  </form>




@endsection