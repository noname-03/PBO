@extends('layout.template')
@section('title', 'Kegiatan')
@section('judul')
    <h1>Kegiatan</h1>
@endsection

@section('konten')
<a href="{{ route('activity.create') }}" class="btn btn-primary" rel="noopener noreferrer"><i class="fas fa-plus"></i> Add</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Waktu</th>
      <th>Tanggal</th>
      <th>Ruangan</th>
      <th>Keterangan</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($activity as $data)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$data->nama}}</td>
              <td>{{$data->waktumulai}}-{{$data->waktuselesai}}</td>
              <td>{{$data->tanggal}}</td>
              <td>{{$data->ruangan}}</td>
              <td>{{$data->Keterangan}}</td>
              <td>
                <form action="{{ route('activity.destroy', ['activity' => $data->id]) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="{{ route('activity.edit', $data->id) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></button></td>
                </form>
              </td>
          </tr>
  @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Waktu</th>
        <th>Tanggal</th>
        <th>Ruangan</th>
        <th>Keterangan</th>
        <th>Action</th>
    </tr>
    </tfoot>
  </table>


@endsection
