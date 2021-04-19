@extends('master')
 
@section('content')

    @if ($message = Session::get('success'))
      <div class="ui success message">
        {{ $message }}
      </div>
    @endif
    <h1>Departamentos</h1>
    <a class="ui button basic green" href="{{ route('departments.create') }}"><i class="plus icon"></i>Adicionar novo</a>
    <table class="ui celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($departments as $department)
        <tr>
          <td class="collapsing">{{ $department->id }}</td>
          <td>{{ $department->name }}</td>
          <td class="right aligned collapsing">
            <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
              <a class="ui button basic" href="{{ route('departments.show',$department->id) }}">Visualizar</a>
              <a class="ui button basic" href="{{ route('departments.edit',$department->id) }}">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="ui button basic red">Deletar</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
      {{ $departments->links('pagination.default') }}
    
@endsection