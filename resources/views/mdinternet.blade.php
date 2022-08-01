
@extends('layout.master')

@section('content')

<!-- Recent Sales -->
<section class="section">
      <div class="row">
      <div class="d-flex justify-content-center">

<div class="col-10">
<div class="card">
  <div class="card-body">
    <h2 class="text-center">Master Data Internet</h2>

<ul>
  <div class="text-right">
          <button type="submit" class="btn btn-primary rounded-pill">Tambah</button>
          <button type="submit" class="btn btn-primary rounded-pill">Unduh</button>
  </div>
</ul>
</div>

<table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Pemakaian</th>
                        <th scope="col">Biaya Admin</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>4038</td>
                        <td><a href="#" class="text-primary">Nia Madu</a></td>
                        <td>0895324870379</td>
                        <td>150.000</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Hapus</button>
                  </div>

                </div>

              </div>
              
          </div>
            
      

@yield('content')
@endsection
                