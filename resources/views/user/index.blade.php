@extends('admin.index')

@section('content')
    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

          <div class="card-body">
            <h5 class="card-title">Data User</h5>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif

            <a href="{{ route('user.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" title="Tambah Data Film" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
             <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
             <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
            </svg></a></br></br>
            
            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">isactive</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php 
                $no=1; 
                @endphp
                @foreach ($user as $us)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $us->name }}</td>
                  <td>{{ $us->email }}</td>
                  <td>{{ $us->role }}</td>
                  <td>{{ $us->isactive }}</td>
                  <td>
                    <form method="POST" action="{{ route('user.destroy',$us->id) }}">
                      @csrf
                      @method('DELETE')
                    <a class="btn btn-warning btn-sm" title="Edit Film" href="{{ url('user-edit',$us->id) }}">
                      <i class="bi bi-pencil"></i>
                    </a>
                    &nbsp;
                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus Film" oneclick="return confirm('Anda yakin data akan dihapus?')">
                      <i class="bi bi-trash"></i>
                    </button>
                    
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>

        </div>
      </div><!-- End Recent Sales -->

@endsection