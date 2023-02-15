@extends('admin.index')

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Ubah Data</h5>

               @if ($errors->any())
               <div class="alert alert-danger">
                   <strong>Whoops!</strong> There were some problems with your input.<br><br>
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
                @endif
                
            <!-- General Form Elements -->
            <form method="POST" action="{{ route('film.update',$fil->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" value="{{$fil->judul}}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                  <input type="text" name="genre" value="{{$fil->genre}}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tanggal Rilis</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_rilis" value="{{$fil->tgl_rilis}}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="sinopsis" style="height: 100px">{{$fil->sinopsis}}</textarea>
                
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Upload Cover</label>
                <div class="col-sm-10">
                  <input class="form-control" name="cover" type="file" id="formFile" >
                  @if(!empty($fil->cover))</br><img src="{{ url('assets_admin/img') }}/{{$fil->cover}}" width="20%" class="img-thumbnail">
                   </br>{{$fil->cover}}
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <a href="{{ url('film')}}"><button type="button" class="btn btn-info text-light">Kembali</button></a>
                </div>
              </div>

            </form><!-- End General Form Elements -->
          </div>
        </div>

      </div>
</section>
@endsection