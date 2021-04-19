@extends('master')
 
@section('content')

    <h1>Projeto</h1>
    <a class="ui button basic" href="{{ route('projects.index') }}"><i class="arrow left icon"></i>Voltar</a>

    <div class="ui attached message">
      <div class="header">
      ID: {{ $project->id }} | {{ $project->name }}
      </div>
    </div>
    <div class="ui attached segment">
      <p><strong>Orçamento:</strong> {{ $project->budget }}</p>
      <p><strong>Gerente:</strong> {{ $project->getemployee()->name }}</p>
    </div>

    <a class="ui labeled icon button primary" href="{{$project->id}}/create-task">
      <i class="plus icon"></i>
      Criar Tarefa
    </a>
    <table class="ui celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome da Tarefa</th>
          <th>Data de Início</th>
          <th>Data de Término</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($project->getTasks() as $task)
          <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->desc}}</td>
            <td>{{$task->start_date}}</td>
            <td>{{$task->end_date}}</td>
            <td class="right aligned collapsing">
              <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                <a class="ui button basic" href="{{$project->id}}/task/{{$task->id}}">Visualizar</a>
                <a class="ui button basic" href="{{$project->id}}/task/{{$task->id}}/edit">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="ui button basic red">Deletar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>


@endsection