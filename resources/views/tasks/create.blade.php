@extends('master')
 
@section('content')
<h1>Tarefa</h1>
<a class="ui button basic" href="{{ route('projects.index') }}"><i class="arrow left icon"></i>Voltar</a>
<div class="ui attached message">
  <div class="header">
    Criar Tarefa
  </div>
</div>
  <form action="{{ route('tasks.store') }}" class="ui form attached segment" method="POST">
    @csrf
      <input type="hidden" name="project_id" value="{{$projectId}}">
    <div class="field">
      <label>Descrição</label>
      <input type="text" name="desc" placeholder="Descrição da Tarefa" required>
    </div>
    <div class="field">
      <label>Data de Início</label>
      <input type="date" name="start_date" required>
    </div>
    <div class="field">
      <label>Data de Término</label>
      <input type="date" name="end_date" required>
    </div>
    <button class="ui button" type="submit">Enviar</button>

  </form>




@endsection