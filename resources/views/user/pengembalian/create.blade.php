@extends('user.layout.main')
@section('content')
    <div class="p-4">
        <form method="POST" action="/pengembalian">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Plat</label>
              <input type="text" name="no_plat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection