<div class="container-fluid">
<div>
    <div class="row fondo-verde">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="d-flex flex-row-reverse">
          <div class="m-3 text-white"><i class="fab fa-instagram"></i></div>
          <div class="m-3 text-white"><i class="fab fa-facebook"></i></div>
          <div class="m-3 text-white"><i class="fab fa-youtube"></i></div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  
</div>
  


  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
  
      <nav class="navbar navbar-expand-md">
  
          <a class="navbar-brand" href="#"><img width="100%" class="img-fluid" src="images/logo.png"></a>
  
          <button class="navbar-toggler d-print-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="offcanvas  offcanvas-start d-print-none" tabindex="-1" id="menu" aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
                  <img class="img-fluid w-50" src="images/logo.jpg" alt="">
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
  
              <div class="offcanvas-body">
  
                  {{menu('web', 'layouts.menu')}}
                  
              </div>
  
          </div>
  
      </nav>
      
  
      </div>
      <div class="col-md-1"></div>
  </div>

</div>