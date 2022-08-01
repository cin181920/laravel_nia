@extends('layout.master')

@section('content')


    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Tambah Data Internet</h2>

    <!-- Vertical Form -->
    <form class="row g-3">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Pemakaian</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Biaya Admin</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Total</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
@yield('content')
@endsection