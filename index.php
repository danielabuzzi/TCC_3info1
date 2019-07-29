<?php
include('cabecalho.php');
?>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter capa">
            <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.jpg&quot;); background-size: cover;">
              <div id="carouselSite" class="carousel slide carousel-fade" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSite" data-slide-to="1"></li>
                    <li data-target="#carouselSite" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url('images/capa1.jpg');?>" class="img-fluid d-block img-capa">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo base_url('images/capa1.jpg');?>" class="img-fluid d-block img-capa">
                        <div class="capa"></div>
                      </div>
                  </div>
              </div>
            </div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="row row-50 justify-content-lg-center align-items-lg-center">
              <div class="col-lg-12">
                <div class="bunner-content-modern text-center">
                  <h1 class="main-bunner-title">Faça o bem</h1>
                  <p>We do whatever it takes to make sure children don’t just survive but thrive. Helper believes that every child should be able to make their mark on their world and help build a better future.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="assets/js/java.js"></script>
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
    <script src="assets/popper.js/dist/umd/popper.js"></script>
    <!-- coded by ragnar-->
  </body>
</html>