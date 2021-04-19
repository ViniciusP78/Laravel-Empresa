@extends('master')
 
@section('content')
<h1>Projetos</h1>
<a class="ui button basic" href="{{ route('projects.index') }}"><i class="arrow left icon"></i>Voltar</a>
<div class="ui attached message">
  <div class="header">
    Adicionar Projeto
  </div>
</div>
  <form action="{{ route('projects.store') }}" class="ui form attached segment" method="POST">
    @csrf
    <div class="field">
      <label>Nome do projeto</label>
      <input type="text" name="name" placeholder="Projeto">
    </div>
    <div class="field">
      <label>Orçamento</label>
      <input type="number" name="budget" placeholder="1000">
    </div>
    <div class="field">
      <label>Gerente do Projeto</label>
      <select type="number" name="employee_id">
        @foreach (App\Models\Employee::get() as $employee)
          <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach
      </select>
    </div>
    <button class="ui button" type="submit">Enviar</button>

  </form>




@endsection