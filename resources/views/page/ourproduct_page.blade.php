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
          <h1 class="section-heading text-uppercase">Event Management</h1>
          @foreach ($event as $event)
            <img mx-auto rounded-square src="{{ url('gambar/'.$event->gambar) }}" alt="web dev" style="width:75%; margin-top:30px">
            <h3 class="section-subheading text-muted">{{$event->judul}}</h3>
            <p style="margin-top:40px">{{$event->deskripsi}}</p>
            <a class="btn btn-dark btn-social mx-2" href="{{$event->link_website}}"><i class="fas fa-globe-europe"></i></a>
            @endforeach
        </div>
      </div>
      



      <div class="container" style="margin-top:50px">
        <div class="text-center">
            <h1 class="section-heading text-uppercase">Influencer & Content Management</h1>
            <h6 class="section-subheading text-muted"></h6>
            <!-- <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px"> -->
            <div class="row">
              @foreach($influencer as $influencer)
              <div class="col-lg-4">
                  <div class="team-member">
                      <img class="mx-auto rounded-square" src="/gambar/{{$influencer->gambar}}" alt="" />
                      <h3>{{$influencer->judul}}</h3>
                      <p class="text-muted" align="center">{{$influencer->deskripsi}}</p><br>
                      <a class="btn btn-dark btn-social mx-2" href="{{$influencer->link_instagram}}" target="blank"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
              @endforeach
              
              </div>
      </div>
      </div>

      <div class="container" style="margin-top:50px">
        <div class="text-center">
            <h1 class="section-heading text-uppercase">Creative Video & Broadcasting</h1>
            <h6 class="section-subheading text-muted"></h6>
            <!-- <img src="assets/img/beauty-fest.jpg" alt="web dev" style="width:75%; margin-top:30px">
            <p style="margin-top:40px">Menyongsong kebangkitan era informasi online, kami TIMES Indonesia Network (TIN) sebagai media online berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman. Kami hadir dengan semangat kuat dan mengusung misi BUILDING - INSPIRING - POSITIVE THINKING. TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap menyajikan informasi global melalui TIN, konsep berita regional dan lokal</p> -->
            <div class="container">
              @foreach ($creative as $creative)
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <div class="mySlides">
                  <div class="numbertext"></div>
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <img class="w-50 h-50" src="{{ url('gambar/'.$creative->gambar) }}" style="width:50%; margin-top:30px">
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  <div class="text"><h3>{{$creative->judul}}</h3></div>
                  <p style="margin-top:40px">{{$creative->deskripsi}}</p>
                <a class="btn btn-dark btn-social mx-2" href="{{$creative->link_video}}" target="blank"><i class="fas fa-globe-europe"></i></a>
                </div>
                
              <br>
              @endforeach

              <div class="mySlides">
                <div class="numbertext"></div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bM2OYQGEA4U" frameborder="0" allowfullscreen></iframe>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="text"></div>
              </div>

                

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

            
        </div>
        </div>
        
      </div>
      </div>
      {{-- <div class="container">
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
        </div> --}}
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
