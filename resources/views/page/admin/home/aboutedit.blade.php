@extends('template.templateedit')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('homeadmin#about') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> Edit About Us</h4><hr>
                                    <form method="POST" action="{{url('aboutupdate')}}">
                                        {{csrf_field()}}

                                        <div class="form-group row">
                                            <label for="judul" class="col-md-2 col-form-label text-md-right">Judul Deskripsi</label>

                                            <div class="col-md-6">
                                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$abouts->judul}}" required autocomplete="judul" autofocus>

                                                @error('judul')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Deskripsi</label>

                                            <div class="col-md-6">
                                                <textarea  class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="" required ="" autofocus id="" cols="30" rows="7">{{$abouts->deskripsi}}</textarea>
                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="visi" class="col-md-2 col-form-label text-md-right">Visi</label>

                                            <div class="col-md-6">
                                                <input id="visi" type="text" class="form-control @error('visi') is-invalid @enderror" name="visi" value="{{$abouts->visi}}" required ="" autofocus>

                                                @error('visi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="misi" class="col-md-2 col-form-label text-md-right">Misi</label>

                                            <div class="col-md-6">
                                                <textarea  class="form-control @error('misi') is-invalid @enderror" name="misi" value="" required ="" autofocus id="" cols="30" rows="7">{{$abouts->misi}}</textarea>
                                                @error('misi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="quotes" class="col-md-2 col-form-label text-md-right">Quotes</label>

                                            <div class="col-md-6">
                                                <textarea  class="form-control @error('quotes') is-invalid @enderror" name="quotes" value="" required ="" autofocus id="" cols="30" rows="5">{{$abouts->quotes}}</textarea>
                                                @error('quotes')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button  type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection