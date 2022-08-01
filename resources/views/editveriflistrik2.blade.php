@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit Verifikasi Listrik</h2>

    <!-- Vertical Form -->
    <form class="row g-3">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Pegawai</label>
        <input type="text" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Alamat</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nomor Kontrol</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Biaya Admin</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Pemakaian (F+G)</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Plafon</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Pegawai</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Beban Perusahaan</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Approve</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
@yield('content')
@endsection