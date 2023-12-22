@extends('layouts.app')
@section('content')

@forelse ($result as $row) 
<div class="bg-success-subtle">
<div class="container d-none d-md-block">
    <div class="row">
    <h4 class="col-md-12 mb-4 mt-5" style="font-family:supercell-magic">{{ $row->kategori}}</h4>
        <div class="col-md-5">
            {!! $row->text !!}
        </div>
        <div class="col-md-6 col-0">
            <img src="{{ asset('storage/pos/'.$row->img)}}" alt="" class="float-end" style="width: 65%">
        </div>
    </div>
</div>
</div>

<!--  2  -->

  
<!--  -->
    <div class="container mt-3">
  <div class="row">
    <!-- search -->
  <form action="" method="get">
   <div class="form-inline mx-4 user-search mt-5 mb-5">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" name="cari_kategori" placeholder="Cari Sesuatu ?" autofocus value="{{ old('search')}}">
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
  @forelse ($db as $row2) 
    <div class="col-md-6 p-4">
    <a class="" style="text-decoration: none;border:none;" href="{{ route('usr.show', $row2->id) }}">
    <div class="card-list row border p-2">
      <div class="col-md-4 ">
         <img src="{{ asset('storage/posts/'.$row2->image)}}" class="rounded" style="width: 90%;height: 10rem ;object-fit:cover" alt="">
      </div>
      <div class="col-md-8 ">
          <h5>{{ $row2->title}} </h5><br>
        <span class="text-secondary">{!! Str::limit(strip_tags($row2->content), 100, ' ...') !!}</span>
      </div>
    </div>
</a>
  </div>
  @empty  
<center>
<div class="alert alert-danger w-75 d-flex justify-content-center">
Data Post belum Tersedia.
</div>
</center>
@endforelse
  </div>
</div>


<!--  /2  -->

@empty   <!-- !! -->
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
@endforelse

@endsection