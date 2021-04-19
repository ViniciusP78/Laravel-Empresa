@extends('master')
 
@section('content')
<h1>Funcionários</h1>
<a class="ui button basic" href="{{ route('employees.index') }}"><i class="arrow left icon"></i>Voltar</a>
<div class="ui attached message">
  <div class="header">
    Adicionar Funcionário
  </div>
</div>
  <form action="{{ route('employees.store') }}" class="ui form attached segment" method="POST">
    @csrf
    <div class="field">
      <label>Nome do funcionário</label>
      <input type="text" name="name" placeholder="Departamento">
    </div>
    <div class="field">
      <label>Endereço</label>
      <input type="text" name="address" placeholder="Rua">
    </div>
    <div class="field">
      <label>Departamento</label>
      <select name="department_id">
        @foreach (App\Models\Department::get() as $department)
          <option value="{{$department->id}}">{{$department->name}}</option>
        @endforeach
      </select>
    </div>
    <button class="ui button" type="submit">Enviar</button>

  </form>




@endsection