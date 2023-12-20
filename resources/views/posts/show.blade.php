@extends('admin')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">show</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/post">Post</a></li>
              <li class="breadcrumb-item active">{{ $posts->id}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container ">
<div class="row">
<div class="col-md-12">

<div class="container mt-5">

    <div class="card">
        <div class="card-body" style="wdth:18rem">
            <div class="row">

                <div class="col-md-5">
                  <h5 class="text-warning">img: </h5><img src="{{ asset('/storage/posts/'.$posts->image) }}" class="rounded " style="width: 90%">
                </div>

                <div class="col-md-5 ">
                  <h5 class="text-warning">Judul  :</h5><span class="card-subtitle mb-2 text-muted">
                    <h5>{{ $posts->title }}</h5>
                  </span>
                  <h5 class="text-warning">Kategori  :</h5>
                  <span class="card-subtitle mb-2 text-muted">
                    <h5>
                      <?php if(isset( $posts->kategori )){
                          echo "$posts->kategori";
                         }else{
                          echo "<span class='text-danger'> tisak ada kategori</span>";
                         }
                       ?>
                    </h5>
                  </span>
                  <hr>
                  <!-- <h5 class="text-warning">konten : </h5><span class="card-text"><h5>{!! $posts->content !!}</h5></span> -->
                </div>

                <div class="col-md-12 mt-4">
                <h5 class="text-warning">konten : </h5><span class="card-text"><h5>{!! $posts->content !!}</h5></span>
                </div>
            </div>

            <hr>
        </div>
     
    
</div>
</div>
@endsection