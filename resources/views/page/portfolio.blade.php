
@extends('template.template')
@section('portfolio')

            <div class="container">
                <div class="text-center">
                    <h2 class="section-headingport text-uppercase">EVENT GALLERY</h2>
                </div>

                <!-- Slideshow container -->
                <div class="slideshow-container">

                <div class="mySlides">
                  <div class="numbertext">1 / 3</div>
                  <img src="img/rs1.jpg" style="width:100%">
                  <div class="text">Beauty Fest</div>
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 3</div>
                  <img src="img/rs2.jpg" style="width:100%">
                  <div class="text">Jember Canaval Festival</div>
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 3</div>
                  <img src="img/rs3.jpg" style="width:100%">
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

                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="" />
                            <h4>Beauty Fest - Jember</h4>
                            <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                            <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/2.jpg" alt="" />
                            <h4>Mahasiswa Jagoan</h4>
                            <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                            <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/3.jpg" alt="" />
                            <h4>FORTRAN 2018</h4>
                            <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                            <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                            <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="" />
                                <h4>Kay Garland</h4>
                                <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                                <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
                            </div>
                        </div>
                    <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-square" src="assets/img/team/1.jpg" alt="" />
                                <h4>Kay Garland</h4>
                                <p class="text-muted" align="center">Our affiliation with Dove©</p><br>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-globe-europe"></i></a>
                                <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#services">Read More</a>
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
