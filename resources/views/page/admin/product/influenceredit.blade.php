@extends('template.templateedit')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('ourproduct_page_admin') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> Edit Influencer</h4><hr>
                                    <form method="POST" action="{{url('influencersave')}}/{{$influencer->id}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar </label>
                                            <div class="col-md-6">
                                                <img class=""  width="500" src="{{ url('gambar/'.$influencer->gambar) }}" alt="belum ada gambar" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar Baru</label>
                                            <div class="col-md-6">
                                                <input id="gambar" type="file" class="form-control" name="gambar" value="{{ url('gambar/'.$influencer->gambar) }}"  autocomplete="" autofocus>

                                                @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Nama Influencer</label>

                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="judul" value="{{$influencer->judul}}" required autocomplete="" autofocus>

                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Deskripsi Influencer</label>

                                            <div class="col-md-6">
                                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{$influencer->deskripsi}}" required autocomplete="" autofocus>

                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Link Instagram</label>

                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control @error('link instagram') is-invalid @enderror" name="link_instagram" value="{{$influencer->link_instagram}}" required autocomplete="" autofocus>

                                                @error('link instagram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button type="submit" class="btn btn-primary">
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