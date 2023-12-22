@extends('layouts.app')
@section('content')
<div class="bg-success-subtle">
<div class="container">
    <div class="row">
      <div class="col-md-12 mt-5 ">
      @forelse($result2 as $row)
      <h2 style="font-family:supercell-magic">{!! $row->kategori !!}</h2>
      </div>
      
        <div class="col-xl-4 mt-4 text-start" style="font-family: 'Poppins', sans-serif;line-height: 1.6;">
       {!! $row->text !!}
        </div>
        <div class="col-xl-8 p-0 m-0">
          
          <img src="{{ asset('storage/pos/'.$row->img) }}" alt="" class="p-0 m-0 float-end" style="width: 70%;height: 70%;">
          @empty   <!-- !! -->
       <div class="alert alert-danger">Data Post belum Tersedia.</div>
      @endforelse
        </div>
    </div>
</div>
</div>
<div class="container mt-5">
    <div class="row">
      <!-- search -->
  <form action="" method="get">
   <div class="form-inline mx-4 user-search mt-5 mb-5">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" name="cari_berita" placeholder="Cari Sesuatu ?" autofocus value="{{ old('search')}}">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007
   1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
         </svg>
            </button>
          </div>
        </div>
      </div>
      </form>
      <!-- /search -->
    @forelse ($result as $row)    <!-- perulangan databases -->
    <div class="col mt-2 col-4 col-sm-3 col-12">
      
      <a href="{{ route('usr.show', $row->id) }}">
      <div class="card-usr card p-1">
        <img src="{{ asset('/storage/posts/'.$row->image) }}" style="width: 100%;height: 16rem ;object-fit:cover" class="card-img-top rounded "  alt="...">
        <div class="card-body">
          
          <h6 class="card-text">{{ $row->title }}</h4>
        </div>
      </div>
      </a>
    </div>
    
    
    @empty   <!-- !! -->
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
    @endforelse
    </div>
</div>
@endsection
