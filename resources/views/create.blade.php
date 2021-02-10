@extends('layouts.main')
@section('content')

    <div class="container">
        <h1>Halaman Pemesanan</h1>
        <!-- Default form register -->
        <form class="text-center border border-light p-5" action="{{ route('simpan') }}" method="POST">
          {{ csrf_field() }}
            <p class=" h4 mb-4">Form Pemesanan Es Krim</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="namadepan" class="form-control" placeholder="Nama Depan" name="namadepan">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="namabel" class="form-control" placeholder="Nama Belakang" name="namabel">
                </div>
            </div>

            <!-- Pesan -->
            <input type="text" id="pesan" class="form-control mb-4" placeholder="Ketik Pesanan" name="pesan">

            <!-- E-mail -->
            <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">



            <!-- Phone number -->
            <input type="text" id="nohp" class="form-control" placeholder="Nomor HP" name="nohp">

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Pesan Sekarang</button>

        </form>
        <!-- Default form register -->
    </div>
@endsection
