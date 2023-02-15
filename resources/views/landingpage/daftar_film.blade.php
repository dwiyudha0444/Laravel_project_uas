@include('landingpage.header')
@include('landingpage.navbar')


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-heading">
              <h6>New</h6>
            </div>
          </div> 
      <div class="col-lg-12">
        <div class="section-heading">
          <h6>New</h6>
          <h4>Update<em> New Film</em></h4>
        </div>
      </div>
      @foreach ($film as $fil)
      <div class="col-lg-4">
          <div class="card" style="width: 18rem; hight:30rem;">
              @empty($fil->cover)
                    <img src="{{ url('assets_admin/img/def.jpg') }}" class="img-fluid" width="100" alt="Film">
                    @else
                    <img src="{{ url('assets_admin/img') }}/{{$fil->cover}}" class="img-fluid" width="100" alt="Film">
                    @endempty
              <div class="card-body">
                <h5 class="card-title">{{$fil->judul}}</h5>
                <p class="card-text">{{$fil->genre}}</p>
                <p class="card-text">{{$fil->tgl_rilis}}</p>
                <a href="{{ route('daftar_film.show',$fil->id) }}" class="btn btn-primary">Detail</a>
              </div>
          </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
