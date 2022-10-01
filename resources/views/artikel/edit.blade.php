@extends('../layouts.app')

@section('content')
<div class="container">
  <div class="row mb-5">
    <div class="col-md-12">
      <a href="/artikel/">
          <button type="button" class="btn btn-secondary btn-sm">Kembali ke Artikel</button>
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
      <div class="col-md-8">
        <h4 class="text-center">Edit Data Artikel</h4>
        <form action="/artikel/{{$datas->id}}" method="POST">
          @method('put')
          @csrf
          <!-- <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id" name="id">
            </div>
          </div> -->
          <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judul" name="title" value="{{$datas->title}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="content" name="content" value="{{$datas->content}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="image" name="image" value="{{$datas->image}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Category Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="category_id" name="category_id" value="{{$datas->category_id}}">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2 offset-md-5">
              
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Update Data">
              
            </div>
          </div>
          
        </form>
      </div>
  </div>
</div>
@endsection
