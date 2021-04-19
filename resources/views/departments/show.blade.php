@extends('master')
 
@section('content')

    <h1>Departamento</h1>
    <a class="ui button basic" href="{{ route('departments.index') }}"><i class="arrow left icon"></i>Voltar</a>
    <table class="ui celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="collapsing">{{ $department->id }}</td>
          <td>{{ $department->name }}</td>
        </tr>
      </tbody>
    </table>

@endsection