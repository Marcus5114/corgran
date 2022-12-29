@extends('layouts.master')

@section('content')
    

    <div class="container-fluid my-3">

        <div>
            <h1><b>Documentos</b></h1>
        </div>
        <div style="background: rgb(242,82,96);
        background: linear-gradient(135deg, rgba(242,82,96,1) 0%, rgba(237,145,33,1) 100%); height:.5rem;">
        </div>

        <br>

        <div>
            <ul class="list-group-flush">

                @foreach ($documentos as $documento)
                    <li class="list-group-item">
                        <h4>{{$documento->titulo}}</h3>
                        <p>{{$documento->descripcion}}</p>
                        <p><a href="{{$documento->documento}}" target="_blank"><i class="fas fa-download"></i> Descargar</a></p>
                    </li>
                @endforeach

            </ul>
        </div>

    </div>


@endsection