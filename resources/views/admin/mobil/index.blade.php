@extends('admin.layout.main')
@section('content')
    <div class="p-4">
        <table class="table">
          <a href="/create-mobil">Tambah Mobil Baru</a>
            <thead>
              <tr>
                <th scope="col">Merek</th>
                <th scope="col">Model</th>
                <th scope="col">No Plat</th>
                <th scope="col">Tarif Per Hari</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{$item->merek}}</td>
                  <td>{{$item->model}}</td>
                  <td>{{$item->no_plat}}</td>
                  <td>{{$item->tarif_per_hari}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection