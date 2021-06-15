@extends('layout.template')
@section('title', 'Mahasiswa')
@section('judul')
<h1>Mahasiswa</h1>
@endsection

@section('konten')
{{-- form --}}

<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Name</label>
            <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Class</label>
            <select id="inputState" name="class" class="form-control">
                <option selected>Choose...</option>
          <option>Software Engineering</option>
          <option>Intelligent Systems</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="inputPassword4">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
</div>
<div class="form-group">
    <label >Upload Your Photo</label>
    <input type="file" class="form-control-file" name="photo" enctype="multipart/form-data">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

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
