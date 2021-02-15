@extends('template.template')
@section('home')
    <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" >Selamat datang di</div>
                <div class="masthead-heading " >Halaman ADMIN Website</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger bg-danger "href="{{url('/')}}">Back to Guest</a>
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
                            <div class="timeline-body"><p class="text-muted" style="font-style: italic">" 
                            {{$abouts->quotes}} "</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <a href="{{url('/aboutedit')}}">
                        <div class="timeline-image">
                            <h4>
                                <i class="fa fa-edit"></i>
                                <br>
                                EDIT 
                            </h4>
                        </div>
                        </a>
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
                            <div class="timeline-image"><img class="rounded-circle img-fluid2" src="/gambar/{{$product->gambar}}" alt="" /></div>
                        <h4 class="my-3" style="color: black">{{$product->nama_product}}</h4></a>
                        <p class="text-muted">{{$product->deskripsi}}</p>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}/{{$product->id}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productdelete')}}/{{$product->id}}"><i class="fa fa-trash"></i></a>   
                    </div>
                    @endforeach
                    <div class="col-md-4 mt-4">
                        <a href="{{route('postproduct')}}">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span><br> <br>
                        <h4 class="my-3" style="color: black">Tambah PRODUCT </h4></a>
                    </div>
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
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}/{{$team->id}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamdelete')}}/{{$team->id}}"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="col-lg-4">
                        <div class="team-member">
                            <a href="{{url('/teamtambah')}}">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3" style="color: black"> Tambah Team </h4></a>
                        </div> 
                    </div>
                </div>
            </div>
        </section> 
@endsection