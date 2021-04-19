@extends('master')
 
@section('content')

    <h1>Funcionário</h1>
    <a class="ui button basic" href="{{ route('employees.index') }}"><i class="arrow left icon"></i>Voltar</a>

    <div class="ui attached message">
      <div class="header">
      ({{ $employee->id }}) {{ $employee->name }}
      </div>
    </div>
    <div class="ui attached segment">
      <p><strong>Endereço:</strong> {{ $employee->address }}</p>
      <p><strong>Departamento:</strong> {{ $employee->getDepartment()->name }}</p>
    </div>


@endsection