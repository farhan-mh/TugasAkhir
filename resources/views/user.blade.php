@extends('layouts.app')
@section('content')
<!-- kotak atas -->
<center>
   <div class="container">
   <div class="row">
    @forelse($tampilan as $row)
    <div class="col-md-6 col-12">
        <img src="{{ asset('storage/lgo/'.$row->img) }}" class="col-md-7 col-12" alt="">
    </div>
    
    <div class="col-md-6 mt-5">
        <h4 class="SelamatD mt-5 " style="font-family: supercell-magic;" align="center">{!! $row->judul !!}</h4>
        <hr>
@empty   <!-- !! -->
@endforelse
        <!-- <h6 class=""><span class="text-success">Temukan</span> panduan praktis, berita terkini, dan tips berharga untuk pertanian yang lebih baik.
        Mari bersama-sama menjelajahi dunia pertanian dan menggali <span class="text-success">potensi luar biasa</span> yang ditawarkannya.
        </h6> -->
    </div>
   </div>
</div>
<br>
</center>
<!--  -->
<br><br>
@forelse($tampilan as $row)
<div class="mb-5 bg-light p-1 p-md-4" style="margin: 0;width:100%;">
    <div class="row mx-1 mx-sm-5">
        <div class="col-md-6 border-end kotak-home2">
        <input type="checkbox" name="" id="readMore" class="d-none">
            <h2 class="judul-artikel-home"><span style="color:orange;">Apa </span>itu pertanian</h2>
            {{ $row->text1}} 
            <article class="artikel-home">
               {{  $row->text2 }}
              <br>  <label for="readMore"  class="b-more"><u>Baca Lebih Sedikit</u></label>
            </article>
            <br><label for="readMore"  class="b-more "><u>Baca Selengkapnya</u></label>
        </div>
        
        <div class="col-md-6 kotak-home2">
        <input type="checkbox" name="" id="readMore2" class="d-none">
            <h2 class="judul-artikel-home"> <span style="color:orange;">Manfaat </span>pertanian</h2>
            {{  $row->text3 }}
            <article class="artikel-home2">
            {{  $row->text4 }}
             <br>  <label for="readMore2"  class="b-more2"><u>Baca Lebih Sedikit</u></label>
            </article>
            <br> <label for="readMore2" class="b-more2  "><u>Baca Selengkapnya</u></label>
        </div>
    </div>
</div>
@empty   <!-- !! -->
@endforelse
   <!-- /kotak atas -->
 
  <!-- search -->
  <form action="" method="get">
   <div class="form-inline mx-4 user-search">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" name="cari_user" placeholder="Cari Sesuatu ?" autofocus value="{{ old('search')}}">
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

     <!-- konten-info -->
   <div class="mx-5 mt-5 garis-berita-home">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="blue" class="bi bi-newspaper mb-3 icon-berita-home" viewBox="0 0 16 16" style="margin-bottom:0px;">
      <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
      <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
    </svg>
      <span class="h3 " style="margin-top:10px;font-family: monospace; ">Info</span>
    </div>

    <div class="container mt-5">
  <div class="row align-items-center">
  @forelse ($posts as $row)    <!-- perulangan databases -->
    <div class=" col mt-2 col-4 col-md-3 col-sm-12 col-12">
      <a class="" style="text-decoration: none;border:none;" href="{{ route('usr.show', $row->id) }}">
      <div class="card-usr border-0 card p-1">
        <img src="{{ asset('/storage/posts/'.$row->image) }}" style="width: 100%;height: 16rem ;object-fit:cover" class="card-img-top  " alt="...">
        <div class="card-body">
          
          <h6 class="card-text text-secondary">{{ $row->title }}</h4>
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
   <!-- /konten-info -->
   @endsection