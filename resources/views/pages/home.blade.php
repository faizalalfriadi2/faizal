@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
    <div class="jumbotron bg-success" style="margin-left: 30%; margin-top: 5%;">
        <div style="font-family: arial;" class="text-center">
            <h1 class="display-5 text-light" style=" font-family: arial; font-weight: bold;"><u>GRIB</u></h1>
        </div>
    </div>
<br><br>

<section class="list" id="list" style="margin-left: 30%">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Transport</h5>
              <p class="card-text">Mengantarkanmu dari titik A ke B dengan tarif transportasi di awal</p>
              <a href="#" class="btn btn-success">Go Car</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Makanan</h5>
              <p class="card-text">Siap antarkan makananmu saat kamu sibuk (atau terlalu lelah) untuk pergi keluar</p>
              <a href="#" class="btn btn-success">Go Food</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Pengiriman</h5>
              <p class="card-text">Kirimkan dokumen atau paket ke berbagai tujuan kapan pun kamu butuhkan</p>
              <a href="#" class="btn btn-success">Go Send</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top: 10%">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Mart</h5>
              <p class="card-text">Temukan semua yang kamu butuhkan</p>
              <a href="#" class="btn btn-success">Go Mart</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Pembayaran</h5>
              <p class="card-text">Membantumu lakukan pembayaran tanpa tunai yang cepat, aman, dan mudah</p>
              <a href="#" class="btn btn-success">Go Pay</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 13rem;">
            <div class="card-body">
              <h5 class="card-title">Kesehatan</h5>
              <p class="card-text">Tanya jawab dengan dokter tentang kesehatanmu</p>
              <a href="#" class="btn btn-success">Go Health</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
