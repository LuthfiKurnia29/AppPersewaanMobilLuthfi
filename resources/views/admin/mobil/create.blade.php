@extends('admin.layout.main')
@section('content')
    <div class="p-4">
        <form action="/add-mobil" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Merek Mobil</label>
              <input type="text" name="merek" class="form-control" id="">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Model Mobil</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="model">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">No Plat</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="no_plat">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tarif Per Hari</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="tarif_per_hari">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection