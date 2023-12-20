@extends('admin')
@section('konten')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tabel Post</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div> 
  
  <div class="container mt-5"> 
    <div class="row">
  <div class="col-md-12"> 
    <div class="card border-0 shadow-sm rounded">
    <div class="card-body"> 
      
      <div class="row">
      <div class="col-md-2">
      <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
      </div>
        <input type="checkbox" class="d-none" name="" id="TambahK">
  <div class="tambahhh col-sm-5">
<label for="TambahK" style="width:69% ;text-align: left; " class=" text-start btn btn-secondary mb-2 ">
    Kategori 
  <img src="{{ asset('svg/chevron-double-left.svg') }}" class="panah-tambah float-end p-1" style="float:right" alt="">
  <img src="{{ asset('svg/chevron-double-down.svg') }}" class="panah-tambah2 float-end p-1" style="float:right" alt="">
  </label>
</div>

       <!-- search -->
       <div class="col-auto">
  <form action="" method="get">
   <div class="form-inline mx-4 user-search">
        <div class="input-group" data-widget="">
          <input class="form-control form-control-sidebar bg-dark border bodersecondary" name="cari_admin" type="" placeholder="Cari judul / kategori"  autofocus value="{{ old('search')}}">
            <button class="btn btn-sidebar bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007
1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
         </svg>
            </button>
        </div>
      </div>
      </form>
      </div>
      <!-- kategori -->
      <div class="bagian_tambah col-md-7">
  <div class="container ">
  <form action="{{ route('th') }}" method="post"  enctype="multipart/form-data">
  @csrf
  <table for="" class=" table table-bordered col-md-12">
    <tr>
      <th>Nama</th>
      <th>list</th>
      <th>Hapus</th>
    </tr>
    <tr>
      <td><input type="text" class="text-secondary-emphasis bg-dark" placeholder="tambah" name="tambahBaru"></td>
      <td>
        <ol>
        @forelse($tambahKategori as $tambah)
          <li>{{ $tambah->kategori }}</li>
          @empty
      <td>err</td>
      @endforelse
        </ol>
      </td>
      <td>
     <ol>
     @forelse($tambahKategori as $tambah2)
        <li><input type="checkbox" name="idHapus[]" value="{{ $tambah2->id }}" ><br></li>
        @empty
     </ol>
      <td>err</td>
      @endforelse
      </td>
    </tr>
    <br>
  </table>
  <button type="submit" class="btn btn-success float-end">selesai</button>
  </form>
  </div>
  </div>
      <!--  -->
      </div>
      <!-- /search -->

      <br><br>
      <table class="table table-bordered"> 
        <thead> 
          <tr>
      <th scope="col">NO</th>
      <th scope="col">GAMBAR</th> 
      <th scope="col">JUDUL</th> 
      <th>Kategori</th>
      <th scope="col">CONTENT</th>
      <th scope="col">AKSI</th> </tr> </thead>
        <tbody>
          @forelse ($posts as $index => $post)
          <tr>
            <td>{{ $index + $posts->firstItem() }}</td>
            <td class="text-center">
              <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
            </td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->kategori}}</td>
            <td>{!! Str::limit($post->content, 250,'  ....') !!}</td>
            <td class="text-center">
              <!--  -->
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $post->id) }}"
                method="POST">
                <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>

                <hr>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                <br>
                <hr>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
              </form>
            </td>
          </tr>
          @empty
          <div class="alert alert-danger">
            Data Post belum Tersedia.
          </div>
          @endforelse
        </tbody>
        </table>
        {{ $posts->links() }}
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection