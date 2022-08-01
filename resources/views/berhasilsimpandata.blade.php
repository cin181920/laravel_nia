
  
@extends('layout.master')

@section('content')

<div class="container my-5 d-flex justify-content-center">
  <div class="row  justify-content-center ">
      <div class="col">
        <div class="card ">
            <div class="card-header pb-0 bg-white border-0 text-center px-sm-4"><h6 class="text-left mt-4 font-weight-bold mb-0"><span><i class="fa fa-times-circle fa-2x mr-3 " aria-hidden="true"></i> </span > Sukses!</h6> <span class="img-1 text-center"><img src="assets/verif.png" class="img-fluid my-4 " /></span> </div>
            <div class="card-body px-sm-4 mb-3">
                <ul class="list-unstyled text-muted"> <li>Selamat! Data Berhasil Disimpan</li> 
                </ul>
                <div class="row justify-content-end mt-4 "> <div class="col-auto"><button type="button" class="btn btn-success"><span >OK</span></button></div></div>
            </div>
        </div>
      </div>
  </div>
</div>
        
@yield('content')
@endsection