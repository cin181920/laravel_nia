@extends('layout.master')

@section('content')

<div class="card">
            <div class="card-body">
            <h2 class="text-center">Database Master Data PAM</h2>

            <ul>
            <div class="text-right">
                    <button type="submit" class="btn btn-primary">Unduh Template</button>
                    <button type="submit" class="btn btn-primary">Unggah Data</button>
            </div>
            </ul>

              <!-- List group with Links and buttons -->
              <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Januari</button>
                <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Februari</button>
                <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan Maret</button>
                <button type="button" class="list-group-item list-group-item-action">Database PAM Bulan April</button>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

@yield('content')
@endsection