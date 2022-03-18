@extends('layout.main')


@section('title', 'Laravel - SI Perpustakaan')


@section('content')


<div class="container">


<div class="jumbotron">


<h1 class="display-6">Data Buku</h1>


<hr class="my-4">     


<a href="buku/create" class="btn btn-primary mb-1">Tambah Buku</a>       


<table class="table">


<thead class="thead-dark">


<tr>


<th scope="col">#</th>


<th scope="col">Judul Buku</th>


<th scope="col">Author Buku</th>


<th scope="col">Sinopsis Buku</th>


<th scope="col">Penerbit Buku</th>


<th scope="col">Cover Buku</th>


<th></th>


</tr>


</thead>


<tbody>


@foreach ($buku as $buku)


<tr>


<td>{{ $loop->iteration }}</td>


<td>{{ $buku->judul }}</td>


<td>{{ $buku->author }}</td>


<td>{{ $buku->sinopsis }}</td>


<td>{{ $buku->penerbit }}</td>


<td><img src='image/{{ $buku->cover_img }}' 


                         style='width:80px; height:50px;'></td>


<td>


<a href="buku/edit/{{ $buku->id }}" 


                            class="badge badge-primary">Edit</a>


<a href="buku/destroy/{{ $buku->id }}" 


                            class="badge badge-danger">Hapus</a>


</td>


</tr>


@endforeach


</tbody>


</table>


</div>


</div>


@endsection