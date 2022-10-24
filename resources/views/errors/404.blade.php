@extends('layouts.warning')
@section('title')
    404 Not Found
@endsection

@section('content')
    <!-- Page Start -->
    <div class="width-100 height-100 position-relative overflow-hidden">
        <div class="position-absolute height-100 end-0 end-md--25 end-xs--90">
            <img src="/assets/img/UI/Background/background-404.svg" alt="" class="width-100p height-100p">
        </div>
        <div class="container-md position-absolute top-50 start-50 translate-middle text-center">
            <img src="/assets/img/UI/404.svg" alt="404" class="width-20p width-sm-35p width-xs-70p">
            <h1 class="margin-top-40 margin-bottom-20 fw-bold">Halaman Tidak Ditemukan</h1>
            <p class="fw-semibold d-inline-block width-50p width-md-80p width-xs-100p">Halaman yang anda tuju mungkin telah
                beralih nama, dipindahkan ke url lain, atau sudah tidak tersedia</p>
            <div class="margin-top-50">
                <a href="/" class="btn-red fontw-7 font-10 rounded-pill shadow-md">Kembali Ke Beranda</a>
            </div>
        </div>
    </div>
@endsection