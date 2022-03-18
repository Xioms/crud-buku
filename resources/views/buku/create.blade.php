@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Tambah Data Buku</h1>


<hr class="my-4">     


<form action="/buku" method="POST" enctype="multipart/form-data">


@csrf


<div class="form-group">


<label for="judul">Judul Buku</label>


<input type="text" class="form-control" name="judul" 


                    placeholder="Judul" value="{{ old('judul') }}">


</div>

<div class="form-group">


<label for="author">Author</label>


<input type="text" class="form-control" name="author" 


                    placeholder="Author Buku" value="{{ old('author') }}">


</div>


<div class="form-group">


<label for="sinopsis">Sinopsis</label>


<input type="text" class="form-control" name="sinopsis" 


                    placeholder="Sinopsis Buku" value="{{ old('sinopsis') }}">


</div>


<div class="form-group">


<label for="penerbit">Penerbit</label>


<input type="text" class="form-control" name="penerbit" 


                    placeholder="Penerbit Buku" value="{{ old('penerbit') }}">


</div>


<div class="form-group">


<label for="cover_img">Cover Buku</label>


<input type="file" name="cover_img">


</div>


<button type="submit" class="btn btn-primary">Simpan</button>


</form>


</div>


</div>


@endsection
