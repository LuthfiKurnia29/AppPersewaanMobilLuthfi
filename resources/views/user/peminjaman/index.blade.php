@extends('user.layout.main')
@section('content')
<div class="p-4">
    <table class="table">
        <a href="/create-peminjaman">Pinjam Mobil</a>
        <thead>
          <tr>
              <th scope="col">No Plat</th>
              <th scope="col">Model</th>
              <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Selesai</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->mobil->no_plat}}</td>
              <td>{{$item->mobil->model}}</td>
              <td>{{$item->tanggal_mulai}}</td>
              <td>{{$item->tanggal_selesai}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection