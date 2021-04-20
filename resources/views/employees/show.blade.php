@extends('master')
 
@section('content')

    <h1>Funcionário</h1>
    <a class="ui button basic" href="{{ route('employees.index') }}"><i class="arrow left icon"></i>Voltar</a>

    <div class="ui top attached message">
      <div class="header">
      ({{ $employee->id }}) {{ $employee->name }}
      </div>
    </div>
    <div class="ui bottom attached segment">
      <p><strong>Endereço:</strong> {{ $employee->address }}</p>
      <p><strong>Departamento:</strong> {{ $employee->getDepartment()->name }}</p>
    </div>

    <div class="ui top attached message">
      <div class="header">
        Adicionar Dependentes
      </div>
    </div>
    <form action="{{ route('dependents.store') }}" class="ui form attached segment" method="POST">
      @csrf
      <div class="two fields">
        <div class="twelve wide field">
          <label>Nome do Dependente</label>
          <input type="text" name="name">
        </div>
        <div class="four wide field">
          <label>Parentesco</label>
          <select name="parentage_id">
          @foreach (App\Models\Parentage::get() as $parentage)
            <option value="{{$parentage->id}}">{{$parentage->desc}}</option>
          @endforeach
          </select>
        </div>
        <input type='hidden' name="employee_id" value="{{$employee->id}}"></input>
      </div>
      <button class="ui button" type="submit">Adicionar</button>
    </form>

    <div class="ui top attached message">
      <div class="header">
        Dependentes
      </div>
    </div>
    <table class="ui bottom attached celled table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome do Familiar</th>
          <th>Parentesco</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employee->getDependents() as $dependent)
          <tr>
            <td>{{$dependent->id}}</td>
            <td>{{$dependent->name}}</td>
            <td>{{$dependent->belongsTo('App\Models\Parentage','parentage_id')->first()->desc}}</td>
            <td class="right aligned collapsing">
              <form action="{{ route('dependents.destroy',$dependent->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="ui button basic red">Remover</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>


@endsection