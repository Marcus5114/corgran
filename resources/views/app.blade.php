@extends('layouts.master')

@section('content')        

  <!-- BANNER -->
  
  @include('layouts.banner')

    <br>
    <br>

  <div class="row">

    <!-- CARRUSEL -->
    <div class="col-md-8 p-0">

      @include('layouts.carrusel')

    </div>
    

    <!-- BOTONERA -->
    <div class="col-md-4">

      @include('layouts.botonera')

    </div>
  </div>

  <br>
  <br>

  <!-- CONOCÉ MAS -->

  @include('layouts.conoce_mas')

  <br>
  <br>

  <!-- NUESTROS PROFESIONALES -->
  
  @include('layouts.profesionales')

    

  @include('layouts.scripts')

@endsection