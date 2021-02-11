@extends('template.template')
@section('home')
    <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" >Selamat datang di</div>
                <div class="masthead-heading " >TIMES Jember Official Website</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger bg-danger "href="#services">Tell Me More</a>
            </div>
        </header>
         <!-- About-->
        
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Our Company</h2>
                    <h3 class="section-subheading text-muted">TIMES Indonesia Biro Jember</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/header.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>TIMES Jember</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Menyongsong kebangkitan era informasi online,
                                kami TIMES IndonesiaNetwork (TIN) sebagai media online
                                berjejaring terbesar se-Indonesia, hadir menjawabkebutuhan zaman.
                                Kami hadir dengan semangat kuat dan mengusung misi
                                BUILDING - INSPIRING - POSITIVE THINKING.
                                
                            </p>
                            <p class="text-muted">
                                <br>
                                TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun
                                juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap
                                menyajikan informasi global melalui TIN, konsep berita regional dan lokal kamihadirkan
                                melalui portal independen regional TIMES lain di seluruh provinsi
                                menuju era Ketahanan Informasi Nasional</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Visi & Misi</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><strong style="color: black"> VISI
                            </strong>                                 
                            <br>
                                Menjadi Media Online Mainstream Berjejaring No. 1 di Indonesia
                                <br>
                                <strong style="color: black">MISI</strong>
                                <br>
                                1. Menggerakkan belanegara bidang informasi lewat media online.
                                <br>
                                2. Menciptakan ketahanan informasi di Indonesia.
                                <br>
                                3. Membangun dan menegakkan jurnalisme positive
                                (building, inspiring, and positive thinking).
                                <br>
                                4. Membangun Media Online Mainstream pertama di seluruh daerah se-nusantara.
                                <br>
                                5. Menciptakan enterpreneurship media yang tangguh dan berwibawa.
                                <br>
                                6. Membangun jejaring informasi yang sehat dan positive.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Quotes</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted" style="font-style: italic">“Perubahan teknologi informasi dan
                                komunikasi itu terjadi detik per detik.
                                Dan, perubahan cepat tersebut menciptakan
                                perubahan pola pikir masyarakat. Di sinilah
                                Times Indonesia Network mengubah
                                Indonesia melalui penguatan ketahanan
                                informasi bagi Indonesia.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Our Product -->
        
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <a href=""><h2 class="section-heading text-uppercase" style="color: black">Our Product</h2></a>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    @foreach ($our_product as $product)
                    <div class="col-md-4">
                        <a href="">
                            <div class="timeline-image"><img class="rounded-circle img-fluid2" src="{{$product->gambar}}" alt="" /></div>
                        <h4 class="my-3" style="color: black">{{$product->nama_product}}</h4></a>
                        <p class="text-muted">{{$product->deskripsi}}</p>
                    </div>
                    @endforeach
                    </div>
                </div>
        </section>    
            
                
        <!-- Team-->
        
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">TIMES Indonesia Biro Jember</h3>
                </div>
                <div class="row">
                    @foreach($team as $team)
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>{{$team->nama}}</h4>
                            <p class="text-muted">{{$team->role}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </section>
        
@endsection