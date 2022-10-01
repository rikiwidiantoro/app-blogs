@extends('../layouts.app')

@section('content')
<div class="container">
  <div class="row mb-5">
    <div class="col-md-12">
      <a href="/kategori/">
          <button type="button" class="btn btn-secondary btn-sm">Kembali ke Kategori</button>
      </a>
    </div>
  </div>
  <div class="row justify-content-center">
      <div class="col-md-8">
        <h4 class="text-center">Tambah Data Kategori</h4>
        <form action="/kategori/store" method="POST">
          @csrf
          <!-- <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id" name="id">
            </div>
          </div> -->
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
          {{-- <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Category Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="category_id" name="category_id">
            </div>
          </div> --}}
          <div class="row mb-3">
            <div class="col-md-2 offset-md-5">
              
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Tambah Data">
              
            </div>
          </div>
          
        </form>
      </div>
  </div>
</div>
@endsection
