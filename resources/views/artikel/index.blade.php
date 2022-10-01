@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <div class="row">
    @foreach($articles as $artikel)
      <div class="col-md-4">
        <div class="card my-3">
          <img src="..." class="card-img-top" alt="{{ $artikel->image }}">
          <div class="card-body">
            <h4 class="card-title">{{ $artikel->title }}</h4>
            <span><em>{{ $artikel->category->name }}</em></span>
            <p class="card-text" style="text-align: justify;">{{ $artikel->content }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div> --}}
  <div class="row justify-content-center">
    <div class="col-md-10">
      <a href="/artikel/create">
        <button type="button" class="btn btn-primary btn-sm">Tambah Artikel</button>
      </a>
      <table class="table mt-3">
        <tr>
          <th>No</th>
          <th>Judul Artikel</th>
          <th colspan="2">Aksi</th>
        </tr>
        @foreach($articles as $artikel)
        <tr>
          <td>{{ $artikel->id }}</td>
          <td>{{ $artikel->title }}</td>
          <td>
            <a href="/artikel/<?=$artikel->id?>/edit">
              <button type="button" class="btn btn-warning btn-sm">Edit</button>
            </a>
          </td>
          <td>
            <form action="/artikel/<?=$artikel->id?>" method="POST">
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
