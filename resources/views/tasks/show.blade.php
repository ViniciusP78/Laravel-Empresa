@extends('master')
 
@section('content')

    <h1>Projeto</h1>
    <a class="ui button basic" href="{{ route('tasks.index') }}"><i class="arrow left icon"></i>Voltar</a>

    <div class="ui attached message">
      <div class="header">
      ID: {{ $task->id }} | {{ $task->desc }}
      </div>
    </div>
    <div class="ui attached segment">
      <p><strong>Data de Início:</strong> {{ $task->start_date }}</p>
      <p><strong>Data de Término:</strong> {{ $task->end_date }}</p>
    </div>

    <div class="ui top attached message">
      <div class="header">
        Adicionar Funcionário
      </div>
    </div>
    <form action="{{ route('addEmployee.store') }}" class="ui form bottom attached segment" method="POST">
    @csrf
    <div class="field">
      <label>Nome do Funcionário</label>
      <select name="employee_id" placeholder="Projeto">
        @foreach ($task->getemployee() as $employee)
          <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach
      </select>
    </div>
    <input type="hidden" name="task_id" value="{{$task->id}}"></input>
    <button class="ui button primary" type="submit">Adicionar</button>
    </form>
    <div class="ui top attached message">
      <div class="header">
        Funcionários da Tarefa
      </div>
    </div>
    <table class="ui attached celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome do Funcionário</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($task->getEmployees() as $employee)
          <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td class="right aligned collapsing">
              <form action="{{ route('addEmployee.destroy',$employee->pivot->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="ui button basic red">Remover</button>
              </form>
            </td>
          </tr>
        @endforeach



@endsection