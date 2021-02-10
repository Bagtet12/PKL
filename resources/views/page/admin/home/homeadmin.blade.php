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
                            <p class="text-muted">{{$abouts->deskripsi}}
                                
                            </p>
                            {{-- <p class="text-muted">
                                <br>
                                TIMES Indonesia Network (TIN) hadir tidak hanya dengan konsep informasi global namun
                                juga dengan informasi regional dan lokal. Oleh karenanya, dengan tetap
                                menyajikan informasi global melalui TIN, konsep berita regional dan lokal kamihadirkan
                                melalui portal independen regional TIMES lain di seluruh provinsi
                                menuju era Ketahanan Informasi Nasional</p> --}}
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
                            <div class="timeline-body"><p class="text-muted" style="font-style: italic">“Perubahan teknologi informasi dan
                            {{$abouts->quotes}}</p></div>
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
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>   
                        <h4 class="my-3" style="color: black">Publikasi</h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">Web Development</h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">PR Consultant</h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">Influencers
                            Activation
                            Management</h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">CREATIVE
                            VIDEO AND
                            BROADCASTING </h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">CONTENT
                            MANAGEMENT
                            SYSTEM </h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <br>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/productedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        <h4 class="my-3" style="color: black">EVENT
                            MANAGEMENT </h4></a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('/producttambah')}}">
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
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                        </div> 
                    </div>
                    <div class="col-lg-0">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                <h4>Kay Garland</h4>
                                <p class="text-muted">Lead Designer</p>
                                <a class="btn btn-dark btn-social mx-2" href="{{url('/teamedit')}}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-trash"></i></a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-0">
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
                {{-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Quotes</p></div>
                </div> --}}
            </div>
        </section> 
@endsection