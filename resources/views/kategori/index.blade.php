@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach($categories as $kategori)
      <div class="col-md-10 border-bottom">
        <article class="my-3">
          <div class="row">
            <div class="col-md-1">
              <h4>{{ $kategori->id }}.</h4>
            </div>
            <div class="col-md-3">
              <h4>{{ $kategori->name }}</h4>
            </div>
            <div class="col-md-3">
              @foreach($kategori->article as $ar)
              <ul>
                <li>{{ $ar->title }}</li>
              </ul>
              @endforeach
            </div>
          </div>
        </article>
      </div>
    @endforeach
  </div>
</div>
@endsection
