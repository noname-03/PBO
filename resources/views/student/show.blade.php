@extends('layout.template')
@section('title', 'Mahasiswa')
@section('judul')
    <h1>{{$student->name}}</h1>
@endsection

@section('konten')
<div class="container">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
        <div class="foto">
          <img src="{{ asset('images') }}/{{$student->namephoto}}" alt="" width="200" height="auto">
        </div>
        </div>
        <div class="col-md-8 kertas-biodata">
          <div class="biodata">
          <table width="100%" border="0">
      <tbody><tr>
          <td valign="top"><br>
            <h1>Teknik Informatika</h1><br>
          <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
            <tbody>
              <tr>
                <td width="25%" valign="top" class="textt">Nama</td>
                  <td width="2%">:</td>
                  <td style="color: rgb(118, 157, 29); font-weight:bold">{{ $student->name}}</td>
              </tr>
              <tr>
                  <td valign="top" class="textt">Fakultas</td>
                    <td valign="top">:</td>
                    <td>Fakultas Teknologi Informasi</td>
                </tr>
            <tr>
                <td class="textt">Peminatan</td>
                  <td>:</td>
                  <td>{{$student->class}}</td>
              </tr>
            <tr>
                  <td class="textt">Nomer Handphone</td>
                    <td>:</td>
                    <td>{{$student->phone}}</td>
            </tr>
            <tr>
                <td class="textt">Alamat</td>
                  <td>:</td>
                  <td>{{$student->address}}</td>
              </tr>
          </tbody></table>
          </td>
      </tr>
      </tbody></table>
    </div>
        </div>
      </div>
    </div>
  </div>
@endsection
