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
            <form method="POST" action="{{ route('user.update',$user->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                  <select class="form-select" name="role" aria-label="Default select example">
                    <option selected>--Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
              </div>
              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Isactive</label>
                <div class="col-sm-10">
                  <select class="form-select" name="isactive" aria-label="Default select example">
                    <option selected>{{$user->isactive}}</option>
                    <option value="1">Aktifkan</option>
                    <option value="0">Nonaktifkan</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <button type="submit" class="btn btn-danger">Batal</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->
          </div>
        </div>

      </div>
</section>
@endsection