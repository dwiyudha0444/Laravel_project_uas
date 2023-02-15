@extends('admin.index')

@section('content')

<section class="section single-speaker">
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
    
            <div class="card">
              <div class="card-body">
              </br>
     <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-md-center">
                    <div class="image-block">
                        @empty($fil->cover)
                        <img src="{{ url('assets/images/thor.jpg') }}" class="img-fluid" alt="Film">
                        @else
                        <img src="{{ url('assets_admin/img') }}/{{$fil->cover}}" class="img-fluid" alt="Film">
                        @endempty
                    </div>   
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="name">
                            <h3>Film Detail</h3>
                        </div>
                        <br />
                        <div class="details">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">JUDUL</th>
                                        <td>{{ $fil->judul }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">GENRE</th>
                                        <td>{{ $fil->genre }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TANGGAL RILLIS</th>
                                        <td>{{ $fil->tgl_rilis }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">SINOPSIS</th>
                                        <td>{{ $fil->sinopsis }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               </div>
        </div>
        <a href="{{ url('film')}}"><button type="button" class="btn btn-info text-light">Kembali</button></a>
        </div>
          </div>
      </div>

    </div>
</section>
@endsection