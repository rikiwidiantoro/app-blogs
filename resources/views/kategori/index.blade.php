@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <a href="/kategori/create">
        <button type="button" class="btn btn-primary btn-sm">Tambah Kategori</button>
      </a>
      <table class="table mt-3">
        <tr>
          <th>No</th>
          <th>Nama Kategori</th>
          <th>Judul Artikel</th>
          <th colspan="2">Aksi</th>
        </tr>
        @foreach($categories as $kategori)
          <tr>
            <td>{{ $kategori->id }}</td>
            <td>{{ $kategori->name }}</td>
            <td>
              @foreach($kategori->article as $ar)
              <li>{{ $ar->title }}</li>
              @endforeach
            </td>
            <td>
              <a href="/kategori/<?=$kategori->id?>/edit">
                <button type="button" class="btn btn-warning btn-sm">Edit</button>
              </a>
            </td>
            <td>
              <form action="/kategori/<?=$kategori->id?>" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
