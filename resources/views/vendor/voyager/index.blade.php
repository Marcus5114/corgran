@extends('voyager::master')

@section('content')
    
<div class="container">

    <div class="text-center">

        <h2>Bienvenido a CORGRAN</h2>
        <p class="lead">Desde este portal vas a poder consultar los datos de tu colegiatura</p>

    </div>

    <hr>

    <div>
        <h3>
            
            @if( auth()->user()->role_id == "1")
            Administrador    
            @else
                Colegiado
            @endif
            {{auth()->user()->apellido}}, {{auth()->user()->name}}
        </h3>

        
            <p><b>DNI</b> - {{auth()->user()->dni}} </p>
            <p><b>N° de Colegiado</b> - {{auth()->user()->nro_colegiado}}</p>
            <a href="{{route('voyager.profile')}}" class="btn btn-primary">Mis datos de contacto</a>
        
        
        

        <hr>

        
        @if ($nopagas->count() >= 3)
        <div class="alert-danger text-center" style="padding: .5rem">

            <h3>Usted debe 3 o más cuotas</h3>
            <h5>Por favor ponganse en contacto con el colegio para solucionar este problema</h5>
            <p>info@corgran.com  //  2920 - xxxxxx</p>
            <p>Datos Bancarios</p>

            <hr>

            <h4><u>Cuotas adeudadas</u></h4>

            <br>

            <div class="row" style="display:flex; justify-content: center;">
                @foreach ($nopagas as $item)
                    <div class="col-md-2">
                        <p><b>Cuota N°:</b>{{$item->id}}</p>
                        <p><b>Fecha:</b> {{date('d-m-Y', strtotime($item->fecha))}}</p>
                        <p><b>Valor:</b> ${{$item->valor}}</p>
                    </div>
                @endforeach
            </div>
                    
                
                
            
        </div>
        
        @else()
        
        <h4>
            Cuotas
        </h4>

        
            <h5 class="text-danger">Deuda: ${{$nopagas->pluck('valor')->sum()}}</h5>
        
        
        <div class="table-responsive">
            <table class="table table-sm">

                <thead>
                    <tr>
                        <th scope="col">N° de Cuota</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($cuotas as $cuota)

                    @if ($cuota->id_colegiado == auth()->user()->id)
                        <tr class="@if($cuota->estado == "1")alert-danger font-weight-bold @elseif($cuota->estado=="2")alert-success font-weight-bold @elseif($cuota->estado =="3")alert-info font-weight-bold @endif">
                            <td>{{$cuota->id}}</td>
                            <td>{{$cuota->fecha}}</td>
                            <td>@switch($cuota->tipo)
                                @case(1)
                                    Cuota Mensual
                                    @break
                                @case(2)
                                    Prof. sin Matrícula        
                                    @break
                                @case(3)
                                    Lic. con Matrícula
                                    @break
                                @case(4)
                                    Técnico
                                    @break
                                @case(5)
                                    Médico Especialista
                                    @break
                                @case(6)
                                    Matrícula Transitoria
                                    @break
                                @default
                                    
                            @endswitch</td>
                            <td>${{$cuota->valor}}</td>
                            <td>@switch($cuota->estado)
                                @case(1)
                                    A Pagar <i class="voyager-exclamation"></i>
                                    @break
                                @case(2)
                                    Pagada <i class="voyager-check"></i>
                                    @break
                                @case(3)
                                    Condonada
                                    @break
                                @default
                                    
                            @endswitch</td>
                        </tr>
                    @endif
    
                    
                @endforeach
                </tbody>
                
            </table>
        </div>
        @endif

        
    </div>

        
</div>




@endsection