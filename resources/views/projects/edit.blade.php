@extends('master')
 
@section('content')
  <h1>Projeto</h1>
  <a class="ui button basic" href="{{ route('projects.index') }}"><i class="arrow left icon"></i>Voltar</a>

  <div class="ui attached message">
    <div class="header">
      Adicionar Projeto
    </div>
  </div>
    <form action="{{ route('projects.update',$project->id) }}" class="ui form attached segment" method="POST">
      @csrf
      @method('PUT')

      <div class="field">
        <label>Nome do projeto</label>
        <input type="text" name="name" value="{{ $project->name }}">
      </div>
      <div class="field">
        <label>Endereço</label>
        <input type="number" name="budget" value="{{ $project->budget }}">
      </div>
      <div class="field">
        <label>Departamento</label>
        <input type="number" name="employee_id" value="{{ $project->employee_id }}">
      </div>
      <button class="ui button" type="submit">Enviar</button>

    </form>




@endsection