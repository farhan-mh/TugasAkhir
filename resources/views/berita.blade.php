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
    hhhh
    </div>
</div>
@endsection
