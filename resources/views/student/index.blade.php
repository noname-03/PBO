@extends('layout.template')
@section('title', 'Mahasiswa')
@section('judul')
    <h1>Mahasiswa</h1>
@endsection

@section('konten')
<a href="{{ route('student.create') }}" class="btn btn-primary" rel="noopener noreferrer"><i class="fas fa-plus"></i> Add</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Class</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->class}}</td>
              <td>{{$student->phone}}</td>
              <td>{{$student->address}}</td>
              <td>
                <form action="{{ route('student.destroy', ['student' => $student->id]) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('student.show', $student->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
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
