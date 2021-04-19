@extends('master')
 
@section('content')
  <h1>Funcionário</h1>
  <a class="ui button basic" href="{{ route('employees.index') }}"><i class="arrow left icon"></i>Voltar</a>

  <div class="ui attached message">
    <div class="header">
      Adicionar Funcionário
    </div>
  </div>
    <form action="{{ route('employees.update',$employee->id) }}" class="ui form attached segment" method="POST">
      @csrf
      @method('PUT')

      <div class="field">
        <label>Nome do funcionário</label>
        <input type="text" name="name" placeholder="Departamento" value="{{ $employee->name }}">
      </div>
      <div class="field">
        <label>Endereço</label>
        <input type="text" name="address" placeholder="Rua" value="{{ $employee->address }}">
      </div>
      <div class="field">
        <label>Departamento</label>
        <input type="text" name="department_id" placeholder="Ex.: acontabilidade" value="{{ $employee->department_id }}">
      </div>
      <button class="ui button" type="submit">Enviar</button>

    </form>




@endsection