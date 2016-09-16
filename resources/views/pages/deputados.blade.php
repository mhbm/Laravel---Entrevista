@extends('layouts.default')
@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>Deputados</h1>
      <p>Lista com todos os deputados em exercícios</p>
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
            <th>Partido</th>
          </tr>
        </thead>
          <tbody>
            @foreach ($deputados as $deputado)
            <tr>
              <td>
                {{ $deputado->nome }}
              </td>
              <td>
                {{ $deputado->numero }}
              </td>
              <td>
                {{ $deputado->partido }}
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

@stop
