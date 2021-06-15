@extends('layout.template')
@section('title', 'Mahasiswa')
@section('judul')
<h1>Mahasiswa</h1>
@endsection

@section('konten')
{{-- form --}}
@foreach ($students as $student)

<form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Name</label>
            <input type="text" name="name" value="{{$student->name}}" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Class</label>
            <select id="inputState" name="class" class="form-control">
                <option selected><strong>{{$student->class}}</strong></option><br><p></p>
                <optgroup>.....................</optgroup>
                <option>Software Engineering</option>
                <option>Intelligent Systems</option>
            </select>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Phone Number</label>
        <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" value="{{$student->address}}">
</div>
<div class="form-group">
    <label >Upload Your Photo</label>
    <input type="file" class="form-control-file" name="namephoto" enctype="multipart/form-data">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

{{-- end from --}}
{{-- aos script --}}
{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
{{-- aos --}}
{{-- <script>
    AOS.init();
</script> --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endsection
