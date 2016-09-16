@extends('layouts.default')
@section('content')

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>Lista de gasto total em verbas indenizatórias</h1>
      <p>Listagem do gasto total em verbas indenizatórias por categoria no ano de 2015 ordenados do maior para o menor</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-justify">
      <table class="table table-striped table-bordered table-responsive table-hover">
        <thead>
          <tr class="text-center">
            <th>Código da Categoria</th>
            <th>Gasto total</th>
          </tr>
        </thead>
          <tbody>
            @foreach ($gastoTotalListaCategoria as $gastoCategoria)
            <tr>
              <td>
                {{ $gastoCategoria->codTipoDespesa }}
              </td>
              <td>
                R$ {{ number_format($gastoCategoria->total_gasto, 2, ',','.') }}
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>Lista dos deputados que mais gastaram em verbas indenizatórias nessas categorias</h1>
      <p>Listagem dos cinco deputados que mais gastaram verbas em cada uma delas.</p>
    </div>
  </div>
</div>

@foreach ($deputadosGastaramCategoria as $listaCategoria)

    <div class="container">
      <div class="row text-justify">
          <table class="table table-striped table-bordered table-responsive table-hover">
            <thead>
              <tr class="text-center">
                <th>Código da Categoria</th>
                <th>Gasto total</th>
                <th>Nome do Deputado</th>
              </tr>
            </thead>
              <tbody>
              @foreach ($listaCategoria as $deputado)
                <tr>
                  <td>
                    {{ $deputado->codTipoDespesa}}
                  </td>
                  <td>
                    R$ {{ number_format($deputado->total_reembolsado, 2, ',','.') }}
                  </td>
                  <td>
                    {{ $deputado->nome }}
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
      </div>
    </div>

@endforeach

@stop
