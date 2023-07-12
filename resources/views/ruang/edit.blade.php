@extends('layout.main')
@section('content')

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('ruang/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $ruang->id ?>">
Nama Ruang <input type="text" name="nama_ruang" value="<?php echo $ruang->nama_ruang ?>"><br>
Nomor  <input type="text" name="nomor" value="<?php echo $ruang->nomor ?>"><br>
<input type= "submit" value="Simpan">
</form>   
@endsection  