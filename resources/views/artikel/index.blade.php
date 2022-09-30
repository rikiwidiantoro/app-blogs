@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach($articles as $artikel)
      <div class="col-md-10 border-bottom">
        <article class="my-3">
          <h2>{{ $artikel->title }}</h2>
          <p>Kategori = {{ $artikel->category->name }}</p>
          <figure>{{ $artikel->image }}</figure>
          <p>{{ $artikel->content }}</p>
        </article>
      </div>
    @endforeach
  </div>
</div>
@endsection
