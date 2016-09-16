@extends('layouts.default')
@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>Partidos dos Deputados</h1>
      <p>Lista com todos os partidos dos deputados</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-justify">
      <table class="table table-striped table-bordered table-responsive table-hover">
        <thead>
          <tr class="text-center">
            <th>Nome</th>
            <th>Número</th>
            <th>Sigla</th>
            <th>Quantidade de Deputados</th>
          </tr>
        </thead>
          <tbody>
            @foreach ($partidos as $partido)
            <tr>
              <td>
                {{ $partido->nome }}
              </td>
              <td>
                {{ $partido->numero }}
              </td>
              <td>
                {{ $partido->sigla }}
              </td>
              <td>
                {{ $partido->qtdeDeputados }}
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

@stop
