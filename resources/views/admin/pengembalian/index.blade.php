@extends('admin.layout.main')
@section('content')
    <div class="p-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Peminjam</th>
                <th scope="col">No Plat</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$item->user->nama}}</td>
                  <td>{{$item->no_plat}}</td>
                  <td>{{$item->total_biaya}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection