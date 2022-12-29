
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
          $('.slider-noticias').slick({
              dots: false,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 2000,
              speed: 300,
              slidesToShow: 2,
              slidesToScroll: 1,
              responsive: [
                  {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      dots: true
                  }
                  },
                  {
                  breakpoint: 600,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
                  },
                  {
                  breakpoint: 480,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
                  }
                
              ]
          });
      });
    </script>

<script>
  $(document).ready(function(){
      $('.slider-profesionales').slick({
          dots: false,
          infinite: false,
          arrows: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 3,
          responsive: [
              {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: true
              }
              },
              {
              breakpoint: 600,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
              },
              {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
              }
            
          ]
      });
  });
</script>
