@extends('user.layout.main')
@section('content')
    <div class="p-4">
        <form action="/create-peminjaman" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pilih Mobil</label>
              <select class="form-select" aria-label="Default select example" name="mobil_id">
                @foreach ($mobils as $item)
                <option value={{$item->id}}>{{$item->model}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Mulai</label>
              <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_mulai">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Selesai</label>
              <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_selesai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection