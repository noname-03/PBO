@extends('layout.template')
@section('title', 'Dosen')
@section('judul')
<h1>Dosen</h1>
@endsection

@section('konten')
{{-- form --}}

<form action="{{ route('lectur.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Nidn</label>
            <input type="text" name="nidn" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Nama</label>
            <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Gender</label>
            <select id="inputState" name="gender" class="form-control">
                <option selected>Choose...</option>
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
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
