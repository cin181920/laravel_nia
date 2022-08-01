
@extends('layout.master')

@section('content')



    <section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h2 class="text-center">Edit Profil</h2>

    <!-- Vertical Form -->
    <form class="row g-3">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Nomor Pegawai</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Ussername</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Password</label>
        <input type="text" class="form-control" id="inputAddress" >
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>

@yield('content')
@endsection
