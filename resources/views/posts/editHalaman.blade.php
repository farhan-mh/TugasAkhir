@extends('layouts.app')
@section('content')
<!-- kotak atas -->
<form action="{{ route('eee') }}" method="post" enctype="multipart/form-data">
  @csrf
  <!--==================== Home =====================-->
  <center>
    <div class="container mt-5">
      <div class="row">
        @forelse ($home as $row)
        <div class="col-md-6 col-12">
        <input type="hidden" name="id_welcome[]" value="1">
          <input type="file" name="gambarLogo[]" id="">
          <img src="{{ asset('storage/lgo/'.$row->img)}}" class="col-md-7 col-12" alt="">
        </div>
        <div class="col-md-6 mt-5">
          <h1 class="SelamatD mt-5 " style="font-family: 'Ubuntu', sans-serif;" align="center">     
           
            <textarea name="judul[]" class="form-control" cols="12" rows="1">{!! $row->judul !!}</textarea>
          </h1>
          @empty
          <div class="text-danger"> err </div>
          @endforelse
          <hr>
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
  @forelse ($home as $row)
  <div class="mb-2 bg-light p-1 p-md-4" style="margin: 0;width:100%;">
    <div class="row mx-1 mx-sm-5">

    @if($row->id == 1)
      <div class="col-md-6 border-end kotak-home2">
        <input type="hidden" name="id_welcome2[]" id="3" value="1">
        <input type="checkbox" name="" id="readMore" class="d-none">
        <h2 class="judul-artikel-home"><span style="color:orange;">Apa </span>itu pertanian</h2>
        
        <textarea name="text1[]" id="" cols="50" rows="2">
            {{ $row->text1 }}
            </textarea>
        <article class="artikel-home">
          <textarea name="text2[]" id="" cols="50" rows="4">
                {{ $row->text2 }}
          </textarea>
          <br> <label for="readMore" class="b-more"><u>Baca Lebih Sedikit</u></label>
        </article>
        <br><label for="readMore" class="b-more "><u>Baca Selengkapnya</u></label>
      </div>
      @endif

      @if($row->id == 1)
      <div class="col-md-6 kotak-home2">
        <input type="hidden" name="id_welcome3[]" value="2">
        <input type="checkbox" name="" id="readMore2" class="d-none">
        <h2 class="judul-artikel-home"> <span style="color:orange;">Manfaat </span>pertanian</h2>
        <textarea name="text3[]" id="" cols="50" rows="2">
              {{ $row->text3 }}
              </textarea>
        <article class="artikel-home2">
          <textarea name="text4[]" id="" cols="50" rows="4">
              {{ $row->text4 }}   
               </textarea>
          <br> <label for="readMore2" class="b-more2"><u>Baca Lebih Sedikit</u></label>
        </article>
        <br> <label for="readMore2" class="b-more2  "><u>Baca Selengkapnya</u></label>
      </div>
      @endif

    </div>
  </div>
  @empty
  <div class="text-danger"> err </div>
  @endforelse
  <!--==================== //Home =====================-->
  <img src="{{ asset('svg/info-square-fill.svg') }}" class="mx-5" style="cursor:pointer" title="Semua Harus Di Isi" alt="">
   <!-- error -->
   @error('logo')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>{{ $message }} </strong>
        </div> 
        @enderror
        @error('warna')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>{{ $message }} </strong>
        </div> 
        @enderror
        @error('judulWeb')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>{{ $message }} </strong>
        </div> 
        @enderror
        @error('menu')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>{{ $message }} </strong>
        </div> 
        @enderror
        <!-- /error -->


 <!--==================== Header =====================-->
 <input type="checkbox" class="d-none" name="" id="Adminn1">
<div class="col-sm-12">
 <label for="Adminn1" style=" "class="Nama-list text-start btn btn-secondary mx-5 mt-5 mb-2">
 - Navbar 
 <img src="{{ asset('svg/chevron-double-left.svg') }}" class="panah-navbar float-end p-1"alt="">
  <img src="{{ asset('svg/chevron-double-down.svg') }}" class="panah-navbar2 float-end p-1"alt="">
</label>
</div>
  <div class="bagian_navbar bg-secondary-subtle p-3">
    <div class="container">
    <h4 for="" class="text-secondary">Navbar</h4>
      <table class="table table-bordered">
      <tr>
       
          <th>Logo</th>
          <th>Nama Web</th>
          <th>Warna Font</th>
          <th>Warna Background</th>
        </tr>
        @forelse($header as $row3)
        <tr>
        <td class="d-none">
            <!-- Hidden input to store IDs -->
            <input type="text" name="id_header[]" value="{{ $row3->id }}">
          </td>
          <td>
            <input type="file" name="logo[]"  class="form-control col-10 border" value="{{ $row3->logo }}">
            <img src="{{ asset('storage/pos/'.$row3->logo) }}" alt="" style="width: 30%">
          </td>
          <td>
            <input type="text" name="judulWeb[]" value="{{ $row3->judulWeb }}" class="">
            <!-- {{ $row3->id }} -->
          </td>
          <td class="">
            <!-- Hidden input to store IDs -->
            <input type="color"  name="warna[]" class="form-control" value="{{ $row3->txt }}">
          </td>
          <td class="">
            <!-- Hidden input to store IDs -->
            <input type="color"  name="menu[]" class="form-control" value="{{ $row3->menu }}"  title="default:76, 191, 80">
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-danger">Err</td>
        </tr>
        @endforelse
      </table>
       <!-- =//\\= -->
      <table class="table table-bordered">
        <tr>
          <th>Menu</th>
          <th>Warna Font</th>
          <!-- <th>lgo</th> -->
          <!-- <th>jdl</th> -->
        </tr>
        @forelse ($header2 as $row4)
        <tr>
          <td class="d-none">
            <!-- Hidden input to store IDs -->
            <input type="text"  name="id_header[]" value="{{ $row4->id }}">
          </td>
          <td>
            <input type="text" name="menu[]" value="{{ $row4->menu }}">
          </td>
          <td>
            <input type="color" class="w-4 form-control" name="warna[]"value="{{ $row4->txt }}">
          </td>
          <td class="d-none"> 
            <input type="file" name="logo[]" class="form-control"><!-- !!penting harus ada-->
            <img src="{{ asset('storage/pos/'.$row4->logo) }}" alt="" style="width: 40%">
            {{ $row4->id }}
          </td>
          <td class="d-none">
            <input type="text" name="judulWeb[]" value="{{ $row4->judulWeb }}"> <!-- !!penting harus ada-->
            {{ $row4->id }}
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-danger">Err</td>
        </tr>
        @endforelse
      </table>
    </div>
  </div>
  <!-- menu di table atas dan logo,judulWeb di table bawah harus ada jika tidak = cannot be null-->
  <!--==================== //Header =====================-->

  <!--==================== Dropdown =====================-->
  <input type="checkbox" class="d-none" name="" id="Adminn2">
  <div class="col-sm-12">
  <label for="Adminn2" style="height:10%;" class="Nama-list text-start btn btn-secondary mx-5 mt-5 mb-2">
  - Dropdown 
  <img src="{{ asset('svg/chevron-double-left.svg') }}" class="panah-dropdown float-end p-1"alt="">
  <img src="{{ asset('svg/chevron-double-down.svg') }}" class="panah-dropdown2 float-end p-1"alt="">
</label>
  </div>
  <div class="bagian_dropdown bg-success-subtle p-3 d">
    <div class="container">
    <h4 for="" class="text-secondary">Dropdown</h4>
      <table class="table table-bordered">
        <tr>
          <th>Kategori</th>
          <th>Text</th>
          <th>Img</th>
          <!-- <th>Hapus</th> -->
        </tr>
        @forelse ($pos as $row)
        <tr>
          <td class="d-none">
            <input type="text" name="post_id[]" value="{{ $row->id }}">
          </td>
          <td>
          <h6 for="" class="text-secondary">{{ $row->kategori }}</h6>
            <input type="hidden" name="kategori[]" value="">
          </td>
          <td>
            <textarea name="text[]" cols="50" rows="5">{{ $row->text }}</textarea>
          </td>
          <td>
            <input type="file" name="img[]" class="form-control">
            <img src="{{ asset('storage/pos/'.$row->img) }}" alt="" style="width: 40%">
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-danger">Err</td>
        </tr>
        @endforelse
      </table>
      <!--  -->
    </div>
  </div>
  <!--==================== //Dropdown =====================-->

  <!--==================== Berita =====================-->
  <input type="checkbox" class="d-none" name="" id="Adminn3">
  <div class="col-sm-12">
<label for="Adminn3" style=" " class="Nama-list text-start btn btn-secondary mx-5 mt-5 mb-2 ">
  - Berita 
  <img src="{{ asset('svg/chevron-double-left.svg') }}" class="panah-berita float-end p-1"alt="">
  <img src="{{ asset('svg/chevron-double-down.svg') }}" class="panah-berita2 float-end p-1"alt="">
</label>
  
  </div>
  <div class="bagian_berita bg-info-subtle p-3">
  <div class="container ">
    <h4 for="" class="text-secondary">Berita</h4>
    <table class="table table-bordered">
      <tr>
        <th>Judul</th>
        <th>Teks</th>
        <th>img</th>
      </tr>
      @forelse ($pos2 as $row)
      <tr>
        <td class="d-none"><input type="text" name="post_id[]" value="{{ $row->id }}"></td>
        <td class="text-center"><input type="text" name="kategori[]" id="" value="{{ $row->kategori }}"></td>
        <td><textarea name="text[]" id="" cols="50" rows="5">{{ $row->text }}</textarea></td>
        <td class="text-center">
          <input type="file" name="img[]" class="form-control">
          <img src="{{ asset('storage/pos/'.$row->img) }}" alt="" style="width: 40%">
        </td>
      </tr>
      @empty
      <div class="text-danger"> err </div>
      @endforelse
    </table>
  </div>
  </div>
  <!--==================== //Berita =====================-->

  <!--==================== Footer =====================-->
  <input type="checkbox" class="d-none" name="" id="Adminn4">
 <div class="col-sm-12">
  <label for="Adminn4" style=" " class="Nama-list text-start btn btn-secondary mx-5 mt-5 mb-2">
  - Footer
  <img src="{{ asset('svg/chevron-double-left.svg') }}" class="panah-footer float-end p-1"alt="">
  <img src="{{ asset('svg/chevron-double-down.svg') }}" class="panah-footer2 float-end p-1"alt="">
</label>
 </div>
  <div class="bagian_footer bg-dark-subtle p-3">
    <div class="container">
    <h4 for="" class="text-secondary">Footer</h4>
      <table class="table table-bordered">
        <tr>
          <th>teks</th>
          <th>svg</th>
          <th>link</th>
          <th>background</th>
        </tr>
        @forelse($footer as $ftr)
        <tr>
          <td class="d-none"><input type="text" name="id_footer[]" value="{{ $ftr->id }}" id=""></td>
          <td><textarea name="teksFooter[]" id="" cols="50" rows="10" value="{{ $ftr->teksFooter }}">{{ $ftr->teksFooter }}</textarea></td>
          <td style="background:#6c757d">
          <h6 for="" class="text-white">svg 1</h6>
            <input type="file" name="svgFooter[]" id="" class="form-control">
            <img src="{{ asset('storage/svgUp/'.$ftr->svg) }}"  width="26" height="26" alt="SVG Image">
            <hr>
           <h6 for="" class="text-white">svg 2</h6>
            <input type="file" name="svgFooter2[]" id="" class="form-control">
            <img src="{{ asset('storage/svgUp/'.$ftr->svg2) }}"  width="26" height="26" alt="SVG Image">
            <hr>
            <h6 for="" class="text-white">svg 3</h6>
            <input type="file" name="svgFooter3[]" id="" class="form-control">
            <img src="{{ asset('storage/svgUp/'.$ftr->svg3) }}"  width="26" height="26" alt="SVG Image">
          </td>
          <td>
          <h6 for="" class="text-secondary mt-4">Link 1</h6>
            <input type="text" name="linkFooter[]" value="{{ $ftr->link }}">
          <hr>
            <h6 for="" class="text-secondary mt-4">Link 1</h6>
            <input type="text" name="linkFooter2[]" value="{{ $ftr->link2 }}">
          <hr>
            <h6 for="" class="text-secondary mt-4">Link 3</h6>
            <input type="text" name="linkFooter3[]" value="{{ $ftr->link3 }}">
          </td>
          <td><input type="color" name="bgFooter[]" class="form-control" value="{{ $ftr->warnaBg }}" id=""  title="warna default: 58, 71, 83"></td>
        </tr>
        @empty
      <div class="text-danger"> err </div>
      @endforelse
      </table>
    </div>
  </div>
  <!--==================== //Footer =====================-->

  <div class="container mt-5">
    <hr>
    <div class="row">
      <a href="{{ url('/post') }}" class="btn btn-warning col-md-4 mx-2">Kembali</a>
      <button type="submit" class="btn btn-primary col-md-7 mx-2">Update</button>
    </div>
  </div>
</form>
@endsection