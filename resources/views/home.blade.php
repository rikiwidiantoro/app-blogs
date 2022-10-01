@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h4>Selamat Datang, {{ Auth::user()->name }}!</h5>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    
    {{-- artikel --}}
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center"><u>Semua Artikel</u></h3>
        </div>
        @foreach($articles as $artikel)
        <div class="col-md-10">
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
    </div>

</div>
@endsection
