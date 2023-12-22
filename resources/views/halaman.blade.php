@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
 <h6 onclick="kembali()" style="cursor:pointer" class="float-start text-decoration-underline">
 <!-- <img src="{{ asset('svg/arrow-left.svg') }}" class="arrow-left-svg" alt=""> -->
  <- kembali</h6>
 </div>
<div class="kontainer-hal container mt-5">
    <div class="row border p-1 p-sm-4" >
    <h4 class="col-xl-12 mt-2">{{$posts->title}}</h4>
    <div class="kiri col-xl-12 p-1 p-md-4 rounded" style="padding:">
      <img src="{{ asset('/storage/posts/'.$posts->image) }}" alt=""  class=" img-di-view rounded mt-2 mx-4" style="">  
      <article class="mt-4">
      {!! $posts->content!!}
     
      </article>
     
    </div>
    <div class="">
   
    </div>

    <!-- <div class="kanan col-xl-3 " style="border:  ;margin-left: 5%;">
        <h2>{{$posts->title}}</h2>
    </div> -->
    
</div>
</div>
@endsection
<script>
  function kembali(){
    window.history.go(-1);
  }
</script>