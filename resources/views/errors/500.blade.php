@extends('layouts.warning')
@section('title')
    500 Error
@endsection

@section('content')
    <!-- Page Start -->
    <div class="width-100 min-height-100 position-relative overflow-hidden">
        <div class="position-absolute height-100 end-0 end-md--25 end-xs--90">
            <img src="/assets/images/UI/Background/background-404.svg" alt="" class="width-100p height-100p">
        </div>
        <div class="container-md position-absolute top-50 start-50 translate-middle text-center">
            <img src="/assets/images/UI/500.svg" alt="500" class="width-20p width-sm-35p width-xs-70p">
            <h1 class="margin-top-40 margin-bottom-20 fw-bold">Sepertinya Ada Yang Salah</h1>
            <p class="fw-semibold d-inline-block width-50p width-md-80p width-xs-100p">Coba berpindah ke halaman lain atau
                hubungi panitia</p>
            <div class="margin-top-50">
                <a href="/" class="btn-red fontw-7 font-10 rounded-pill shadow-md">Kembali Ke Beranda</a>
            </div>
        </div>
    </div>
@endsection
