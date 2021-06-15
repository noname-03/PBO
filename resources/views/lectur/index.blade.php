@extends('layout.template')
@section('title', 'Dosen')
@section('judul')
    <h1>Dosen</h1>
@endsection

@section('konten')
<a href="{{ route('lectur.create') }}" class="btn btn-primary" rel="noopener noreferrer"><i class="fas fa-plus"></i> Add</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nidn</th>
      <th>Nama</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($lecturs as $data)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$data->nidn}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->gender}}</td>
              <td>{{$data->address}}</td>
              <td>
                <form action="{{ route('lectur.destroy', ['lectur' => $data->id]) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="{{ route('lectur.edit', $data->id) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('lectur.show', $data->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></button></td>
                </form>
              </td>
          </tr>
  @endforeach
    </tbody>
    <tfoot>
    <tr>
          <th>No</th>
          <th>Name</th>
          <th>Class</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Action</th>
    </tr>
    </tfoot>
  </table>


@endsection
