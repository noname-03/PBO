@extends('layout.template')
@section('title', 'Kegiatan')
@section('judul')
<h1>Kegiatan</h1>
@endsection

@section('konten')
{{-- form --}}
@foreach ($activites as $data)

<form action="{{ route('activity.update',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Nama</label>
            <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Waktu Mulai</label>
            <input type="time" name="waktumulai" class="form-control" value="{{$data->waktumulai}}" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Waktu Selesai</label>
            <input type="time" name="waktuselesai" class="form-control" value="{{$data->waktuselesai}}" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}" id="inputEmail4">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Ruangan</label>
            <select id="inputState" name="ruangan" class="form-control">
                <option selected>{{$data->ruangan}}</option>
          <option>Audit</option>
          <option>R.201</option>
          <option>R.202</option>
          <option>R.103</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Keterangan</label>
        <input type="text" class="form-control" value="{{$data->Keterangan}}" name="Keterangan" id="inputPassword4">
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
