<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colegio de Nutricionistas de Río Negro</title>

    @include('layouts.header')
    
  </head>
  <body>
      
      <!---->

    <!-- NAVBAR -->

    @include('layouts.navbar')

    <!-- FIN NAVBAR -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        
        <div class="col-md-10">

          @yield('content')

        </div>

        <div class="col-md-1"></div>
      </div>
    </div>


    <!--include('layouts.footer')-->
  

  </body>

</html>