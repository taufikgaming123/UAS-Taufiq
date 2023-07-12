@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Ruang</h1>
<form action="{{ asset('ruang/tambah_proses') }}" method="POST">
@csrf
Nama Ruang <input type="text" name="nama_ruang"><br>
Nomor <input type="text" name="nomor"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection