@extends('admin.layout.main')
@section('content')
    <div class="p-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Peminjam</th>
                <th scope="col">No Plat</th>
                <th scope="col">Model</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$item->user->nama}}</td>
                  <td>{{$item->mobil->no_plat}}</td>
                  <td>{{$item->mobil->model}}</td>
                  <td>{{$item->tanggal_mulai}}</td>
                  <td>{{$item->tanggal_selesai}}</td>
                  <td>{{$item->mobil->disewa ? "Disewa" : "Selesai"}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection