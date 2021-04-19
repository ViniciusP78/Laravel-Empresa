@extends('master')
 
@section('content')

    @if ($message = Session::get('success'))
      <div class="ui success message">
        {{ $message }}
      </div>
    @endif
    <h1>Funcionários</h1>
    <a class="ui button basic green" href="{{ route('employees.create') }}"><i class="plus icon"></i>Adicionar novo</a>
    <table class="ui celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Departamento</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($employees as $employee)
        <tr>
          <td class="collapsing">{{ $employee->id }}</td>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->getDepartment()->name }}</td>
          <td class="right aligned collapsing">
            <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
              <a class="ui button basic" href="{{ route('employees.show',$employee->id) }}">Visualizar</a>
              <a class="ui button basic" href="{{ route('employees.edit',$employee->id) }}">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="ui button basic red">Deletar</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
      {{ $employees->links('pagination.default') }}
    
@endsection