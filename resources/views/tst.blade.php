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
<a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">GAMBAR</th>
<th scope="col">JUDUL</th>
<th scope="col">CONTENT</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($posts as $post)
<tr>
<td class="text-center">
<img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
</td>
<td>{{ $post->title }}</td>
<td>{!! $post->content !!}</td>
<td class="text-center">
<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $post->id) }}" method="POST">
<a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>

<hr>
<a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
<br><hr>
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
