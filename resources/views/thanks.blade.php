@extends('layouts.main')
@section('content')
    @if (session('successMsg'))
        <div class="alert alert-success" role="alert">
            {{ session('successMsg') }}
        </div>

    @endif
    <h1>Terimakasih Telah Memesan Es Krim</h1>
    <h2>Segera Lakukan Pembayaran Melalui Rekening Kami</h2>
@endsection
