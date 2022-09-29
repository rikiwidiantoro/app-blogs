@extends('layouts.app')

@section('content')
<div class="container">
  <a href="" class="btn btn-secondary mb-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">tambah kategori</a>
    <div class="row justify-content-center">
      @foreach($categories as $kategori)
        <div class="col-md-10">
          <article class="mb-5">
            <div class="row">
              <div class="col-md-1">
                <h3>{{ $kategori->id }}.</h3>
              </div>
              <div class="col-md-3">
                <h3>{{ $kategori->name }}</h3>
              </div>
              <div class="col-md-3">
                @foreach($kategori->article as $ar)
                <ul>
                  <li>{{ $ar->title }}</li>
                </ul>
                @endforeach
              </div>
              <div class="col-md-3 aksi">
                  <a href="" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">edit kategori</a>
                  <a href="" class="btn btn-danger mx-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">hapus kategori</a>
              </div>
            </div>
          </article>
        </div>
      @endforeach
    </div>
</div>
@endsection
