@extends ('template.template')
@section('profil')
<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/')}}">Home</a></li>
                        
@endsection
@section ('home')

  <header class="masthead">
          <div class="container">
              <div class="masthead-heading " >OUR PRODUCT</div>
          </div>
      </header>

      <div class="container" style="margin-top:50px; margin-bottom:30px">
        <div class="text-center">
          @foreach ($ourproduct_page as $ourproduct_page)
            <h1 class="section-heading text-uppercase">{{$ourproduct_page->nama_product}}</h1>
            <h6 class="section-subheading text-muted">pengembangan website</h6>
            <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px">
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            
            @endforeach
        </div>
      </div>
      <div class="container">
        <ul class="timeline">
          <li>
            <div class="timeline-panel">
            </div>
          </li>
              <!-- <li class="timeline-inverted">
                  <div class="timeline-inverted">

                  </div>
              </li> -->
        </ul>
      </div>



      <div class="container" style="margin-top:50px">
        <div class="text-center">
            <h1 class="section-heading text-uppercase">Influencer & Content Management</h1>
            <h6 class="section-subheading text-muted">Kami me-manage para influencer influencer keren nih!</h6>
            <!-- <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px"> -->
            <div class="container">

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

            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
        </div>
      </div>
      <div class="container">
        <ul class="timeline">
          <li>
            <div class="timeline-panel">
            </div>
          </li>
              <!-- <li class="timeline-inverted">
                  <div class="timeline-inverted">

                  </div>
              </li> -->
        </ul>
        </div>
      </div>

      <div class="container" style="margin-top:50px">
        <div class="text-center">
            <h1 class="section-heading text-uppercase">Creative Video & Broadcasting</h1>
            <h6 class="section-subheading text-muted">pengembangan website</h6>
            <!-- <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px">
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p> -->
            <div class="container">

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

            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
        </div>
        </div>
      </div>
      <div class="container">
        <ul class="timeline">
          <li>
            <div class="timeline-panel">
            </div>
          </li>
              <!-- <li class="timeline-inverted">
                  <div class="timeline-inverted">

                  </div>
              </li> -->
        </ul>
        </div>
      </div>


      <div class="container" style="margin-top:50px">
        <div class="text-center">
            <h1 class="section-heading text-uppercase">Event Management</h1>
            <h6 class="section-subheading text-muted">pengembangan website</h6>
            <!-- <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px">
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p> -->
            <div class="container">

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

            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            </div>

        </div>
      </div>
      <div class="container">
        <ul class="timeline">
          <li>
            <div class="timeline-panel">
            </div>
          </li>
              <!-- <li class="timeline-inverted">
                  <div class="timeline-inverted">

                  </div>
              </li> -->
        </ul>
        </div>
      </div>
@endsection



      <!-- <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4">
            <h3>IDEA FEST</h3>
            <h5>Lippo Plaza Jember</h5>
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES IndonesiaNetwork (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            <hr class="d-sm-none">
          </div>
          <div class="col-sm-8" style="margin-top:30px">
            <div class="card-img-top"><img class="rounded-square img-fluid" src="assets/img/beauty-fest.jpg" alt="" /></div>
            <br>
          </div>
        </div>
      </div>



      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-8">
            <div class="card-img-top"><img class="rounded-square img-fluid" src="assets/img/beauty-fest.jpg" alt="" /></div>
            <br>
          </div>
          <div class="col-sm-4" style="margin-top:30px">
            <h2>TITLE HEAD</h2>
            <h5>Sub Heading</h5>
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES IndonesiaNetwork (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>

      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4">
            <h2>TITLE HEAD</h2>
            <h5>Sub Heading</h5>
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES IndonesiaNetwork (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            <hr class="d-sm-none" style="margin-top:30px">
          </div>
          <div class="col-sm-8">
            <div class="card-img-top"><img class="rounded-square img-fluid" src="assets/img/beauty-fest.jpg" alt="" /></div>
            <br>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-8">
            <div class="card-img-top"><img class="rounded-square img-fluid" src="assets/img/beauty-fest.jpg" alt="" /></div>
            <br>
          </div>
          <div class="col-sm-4" style="margin-top:30px">
            <h2>TITLE HEAD</h2>
            <h5>Sub Heading</h5>
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES IndonesiaNetwork (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p>
            <hr class="d-sm-none">
          </div>
        </div>
      </div> -->
