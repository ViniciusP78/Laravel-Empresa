@extends('master')
 
@section('content')

    @if ($message = Session::get('success'))
      <div class="ui success message">
        {{ $message }}
      </div>
    @endif
    <h1>Projetos</h1>
    <a class="ui button basic green" href="{{ route('projects.create') }}"><i class="plus icon"></i>Adicionar novo</a>
    <table class="ui celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Orçamento</th>
          <th>Gerente do Projeto</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($projects as $project)
        <tr>
          <td class="collapsing">{{ $project->id }}</td>
          <td>{{ $project->name }}</td>
          <td>{{ $project->budget }}</td>
          <td>{{ $project->getemployee()->name }}</td>
          <td class="right aligned collapsing">
            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
              <a class="ui button basic" href="{{ route('projects.show',$project->id) }}">Visualizar</a>
              <a class="ui button basic" href="{{ route('projects.edit',$project->id) }}">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="ui button basic red">Deletar</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
      {{ $projects->links('pagination.default') }}
    
@endsection