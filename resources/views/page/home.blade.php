@extends('template.template')
@section('profil')
<li class="nav-item dropdown">
    <a style="color: white" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#about">About</a>
      <a class="dropdown-item" href="#services">Our Product</a>
      <a class="dropdown-item" href="{{route('portfolio')}}">Portfolio</a>
      <a class="dropdown-item" href="#team">Team</a>
      <a class="dropdown-item" href="#contact">Contact</a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('/')}}">Home</a>
    </div>
</li>
@endsection
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
                                <h4>{{$abouts->judul}}</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">{{$abouts->deskripsi}}</p>
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
                                {{$abouts->visi}}
                                <br>
                                <strong style="color: black">MISI</strong>
                                <br>    
                                {{$abouts->misi}}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Quotes</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted" style="font-style: italic">
                            {{$abouts->quotes}}</p></div>
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
                            <div class="timeline-image"><img class="rounded-circle img-fluid2" src="{{ url('gambar/'.$product->gambar) }}" alt="" /></div>
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
                            <img class="mx-auto rounded-circle" src="{{ url('gambar/'.$team->gambar) }}" alt="" />
                            <h4>{{$team->nama}}</h4>
                            <p class="text-muted">{{$team->role}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </section>
        
@endsection