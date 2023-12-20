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

    <div class="container mt-3">
  <div class="row">
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