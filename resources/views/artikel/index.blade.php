@extends('layouts.app')

@section('content')
<div class="container">
  <a href="" class="btn btn-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">tambah artikel</a>
    <div class="row justify-content-center">
      @foreach($articles as $artikel)
        <div class="col-md-10">
          <article class="mb-5">
            <h2>{{ $artikel->title }}</h2>
            <figure>{{ $artikel->image }}</figure>
            <p>{{ $artikel->content }}</p>
            <div class="aksi">
              <a href="" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">edit artikel</a>
              <a href="" class="btn btn-danger mx-4" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">hapus artikel</a>
            </div>
          </article>
        </div>
      @endforeach
    </div>
</div>
@endsection
