<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Times Indonesia Biro Jember</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/portfolio.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url("/")}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('page_product')}}">Our Product</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/portfolio')}}">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.instagram.com/timesjember/" target="blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.youtube.com/channel/UCgj4fXpMKECuDIOTcx-CvLg" target="blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- mastport-->
        <header class="mastport">
            <div class="container">
                <div class="mastport-heading text-uppercase">PORTOFOLIO KAMI</div>
                <!-- <div class="mastport-subheading"></div> -->
            </div>
        </header>

            <div class="container">
                <div class="text-center">
                    <h2 class="section-headingport text-uppercase">EVENT GALLERY</h2>
                </div>

                <!-- Slideshow container -->
                <div class="slideshow-container">

                <div class="mySlides">
                  <div class="numbertext">1 / 3</div>
                  <img src="..." style="width:100%">
                  <div class="text">Beauty Fest</div>
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 3</div>
                  <img src="..." style="width:100%">
                  <div class="text">Jember Canaval Festival</div>
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 3</div>
                  <img src="..." style="width:100%">
                  <div class="text">Web Deelopment</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                }
                </script>

                <div class="container">
                  <p class="textport">
                    Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawab kebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING.
                  </p>
                </div>

                <div class="text-center">
                    <h2 class="section-headingporto text-uppercase">EVENT KAMI</h2>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                  </div>
                </div>

                <hr/>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                  </div>
                </div>

                <hr/>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                  </div>
                </div>

                <hr/>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                  </div>
                </div>

                <hr/>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                  </div>
                </div>

                <hr/>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>IMG</p>
                    </div>
                    <div class="col-sm-6">
                      <h3>Title</h3>
                      <p>Deskripsi Foto sesuatu</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                    </div>
                  </div>
                </div>



                <div class="text-center">
                  <h2 class="section-headingporto text-uppercase">PARTNER KAMI</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="foto partner" />
                            <h4>Beauty Fest - Jember</h4>
                            <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                            <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/2.jpg" alt="foto partner" />
                            <h4>Mahasiswa Jagoan</h4>
                            <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/3.jpg" alt="foto partner" />
                            <h4>FORTRAN 2018</h4>
                            <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="foto partner" />
                            <h4>Unilever</h4>
                            <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="foto partner" />
                                <h4>Kopi Rengganis</h4>
                                <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                            </div>
                        </div>
                    <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="foto partner" />
                                <h4>Ayam Kulit Erfinda</h4>
                                <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
