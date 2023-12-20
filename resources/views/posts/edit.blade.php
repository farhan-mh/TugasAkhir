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
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container ">
<div class="row">
<div class="col-md-12">

<div class="container mt-5">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label> <input type="file" class="form-control"
                                    name="image">
                            </div>
                            <div class="form-group"> <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $post->title) }}"
                                    placeholder="Masukkan Judul Post">
                                <!-- error message untuk title -->
                                @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group"> <label class="font-weight-bold">Kategori</label>
                                <!-- <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('kategori', $post->kategori) }}" placeholder="Masukkan Judul Post"> -->
                                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                                    id="">
                                    <option value="{{ old('kategori', $post->kategori) }}"
                                     class="text-white bg-secondary">{{ old('kategori', $post->kategori) }}</option>
                                     @forelse($kategorisEdit as $kEdit)
                                    <option value="{{ $kEdit->kategori }}">{{ $kEdit->kategori }}</option>
                                    @empty
                                    <p>err</p>
                                    @endforelse
                                </select>
                                <!-- error message untuk title -->
                                @error('kategori')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content"
                                    rows="5"
                                    placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>
                                <!-- error message untuk content -->
                                @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</div>
@endsection