@extends('admin.index')

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Input</h5>

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
            <form method="POST" action="{{ route('film.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                  <input type="text" name="genre" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tanggal Rilis</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_rilis" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="sinopsis" style="height: 100px"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Upload Cover</label>
                <div class="col-sm-10">
                  <input class="form-control" name="cover" type="file" id="formFile" >
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Simpan</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->
          </div>
        </div>

      </div>
</section>
@endsection