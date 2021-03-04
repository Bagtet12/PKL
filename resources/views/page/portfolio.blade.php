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
        <!-- <link href="css/portfolio.css" rel="stylesheet" /> -->

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        {{-- snipet --}}
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
        </style>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('page_product')}}">Gallery</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/portfolio')}}">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('page_product')}}">Our Product</a></li> -->
                        <li class="nav-item dropdown">
                          <a style="color: white" class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('portfolio')}}" role="button" aria-haspopup="true" aria-expanded="false">Portofolio</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#eventgallery">Event Gallery</a>
                            <a class="dropdown-item" href="#eventkami">Event Kami</a>
                            {{-- <a class="dropdown-item" href="{{route('portfolio')}}">Portfolio</a> --}}
                            <a class="dropdown-item" href="#partner">Partner</a>
                            {{-- <a class="dropdown-item" href="#contact">Contact</a> --}}
                            {{-- <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{url('/')}}">Home</a>
                          </div> --}}
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/portfolio')}}">Portfolio</a></li> --}}
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.instagram.com/timesjember/" target="blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.youtube.com/channel/UCgj4fXpMKECuDIOTcx-CvLg" target="blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- mastport-->
        <header class="mastport">
            <div class="container">
                <div class="mastport-heading text-uppercase" data-aos="fade-up" data-aos-duration="2500">PORTOFOLIO KAMI</div>
                <!-- <div class="mastport-subheading"></div> -->
            </div>
        </header>

            <div class="container">
                <div id="eventgallery"  class="text-center" data-aos="fade-right">
                    <h2 class="section-headingport text-uppercase">EVENT GALLERY</h2>
                </div>

                <!-- Slideshow container -->
                <div class="slideshow-container" data-aos="fade-left">

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

                <div class="container" data-aos="fade-right">
                  <p class="textport">
                    Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawab kebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING.
                  </p>
                </div>

                <div id="eventkami" class="text-center" data-aos="fade-left">
                    <h2 class="section-headingporto text-uppercase">EVENT KAMI</h2>
                </div>

                <div class="container">
                  @foreach ($portfolio as $portfolio)

                  <div class="row">

                    <div class="col-sm-6">
                      <a href="{{$portfolio->link}}"><h3>{{$portfolio->judul}}</h3></a>
                      <p>{{$portfolio->deskripsi}}</p>
                    </div>
                    <div class="col-sm-6">
                      <a href="{{$portfolio->link}}" target="blank"><img width="65%" src="{{ url('gambar/portfolio/'.$portfolio->gambar) }}" alt=""></a>
                    </div>
                  </div>
                  <hr/>
                  @endforeach
                </div>


                <div id="partner" class="text-center" data-aos="fade-right">
                  <h2 class="section-headingporto text-uppercase">PARTNER KAMI</h2>
                </div>

                <div class="row">
                  @foreach ($partner as $partner)
                  <div class="col-lg-4">
                    <div class="team-member">
                        <img width="50%" class="mx-auto rounded-square" src="{{ url('gambar/partner/'.$partner->gambar) }}" alt="foto partner" />
                        <h4>{{$partner->judul}}</h4>
                        <!-- <p class="text-muted" align="center">Our affiliation with Dove©</p><br> -->
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                        <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a> -->
                    </div>
                </div>
              </div>
            </div>

                  @endforeach


                  <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
                      <br>
                      <div class="container">
                        <div class="row row-30">
                          <div class="col-md-4 col-xl-5">
                            <div class="pr-xl-4"><a class="brand" href="{{url('/')}}"><img class="brand-logo-light" src="assets/img/logo.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                              {{-- <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p> --}}
                              <p>Media Nasional</p>
                              <!-- Rights-->
                              <p class="rights"><span>©  </span><span class="copyright-year">2021</span><span> </span><span>Times Indonesia</span><span>. </span><span>Biro Jember.</span></p>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <h5>Contacts</h5>
                            <dl class="contact-list">
                              <dt>Address:</dt>
                              <dd>City Forest & Farm Arum Sabil, Jambutan, Antirogo, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124</dd>
                            </dl>
                            <dl class="contact-list">
                              <dt>email:</dt>
                              <dd><a href="mailto:#">email@gmail.com</a></dd>
                            </dl>
                            <dl class="contact-list">
                              <dt>phones:</dt>
                              <dd><a href="tel:#">no.telp</a>
                              </dd>
                            </dl>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <h5>Links</h5>
                            <ul class="nav-list">
                              <li><a href="https://www.timesindonesia.co.id/tag/TIMES-Indonesia-Biro-Jember" target="_blank">Berita Times Indonesia Biro Jember </a></li>
                              {{-- <li><a href="#">Projects</a></li> --}}
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row no-gutters social-container">
                          <div class="col"><a class="social-inner" href="https://www.facebook.com/timesindonesiajember/" target="_blank"><span class="icon mdi mdi-facebook"></span><span><i class="fab fa-facebook"></i> Facebook</span></a></div>
                          <div class="col"><a class="social-inner" href="https://www.youtube.com/channel/UCgj4fXpMKECuDIOTcx-CvLg" target="_blank"><span class="icon mdi mdi-youtube"></span><span><i class="fab fa-youtube"></i> Youtube</span></a></div>
                          <div class="col"><a class="social-inner" href="https://www.instagram.com/timesjember/" target="_blank"><span class="icon mdi mdi-instagram"></span><span><i class="fab fa-instagram"></i> instagram</span></a></div>
                      </div>
                    </footer>





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

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>
