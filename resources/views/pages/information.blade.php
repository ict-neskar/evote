@extends('layouts.app')
@section('title')
    Informasi
@endsection

@section('content')
    <!-- Mark Page -->
    <script>
        const page = "about";
        AOS.init();
    </script>

    <!-- Header -->
    <div class="w-100 height-100 bg-red padding-x-45 padding-xs-x-10 padding-top-100 position-relative overflow-hidden">
        <div class="position-relative z-2 d-flex align-items-top margin-top-25 margin-bottom-15" data-aos="fade-right"
            data-aos-duration="1000" data-aos-delay="100">
            <img src="/assets/images/UI/Icon/logo-white.svg" alt="" class="height-075 height-xs-5">
        </div>
        <div class="position-relative z-2 width-40 width-md-65 width-xs-100p" data-aos="fade-right" data-aos-duration="1000"
            data-aos-delay="100">
            <p class="white">
                E-Vote adalah platform layanan pemilihan yang dapat digunakan oleh semua orang. Kami membantu pengguna kami
                dengan
                menyediakan fitur - fitur pendukung untuk membantu mengelola pelaksanaan
            </p>
            <p class="white">
                E-Vote dirancang oleh tim Pejuang Daring. Kami saat ini adalah tim kecil yang bergerak dalam software
                development. Visi
                kami adalah untuk mendigitalisasikan dunia. Kami menjunjung tinggi keandalan serta tidak memiliki struktur
                yang rumit
                dalam tim. Hal ini memungkinkan kami untuk bekerja dengan cepat tanpa tekanan.
            </p>
        </div>
        <div class="position-absolute end-0 bottom-0 width-100 d-flex justify-content-end">
            <span class="filter-linear-red-right"></span>
            <img src="/assets/images/UI/Background/background-about.png" alt="" class="height-100">
        </div>
    </div>
    <!-- Cara Kerja -->
    <div class="margin-bottom-50 margin-md-bottom-25 margin-xs-bottom-15 margin-top-100 margin-x-30">
        <h1 class="text-center fw-bold">Gimana Cara Kerjanya?</h1>
        <span class="under-line"></span>
    </div>
    <div class="row gx-5 margin-x-45 margin-xs-10 overflow-hidden position-relative">
        <div class="col-12 col-md-4 margin-md-bottom-35 margin-bottom-0" data-aos="fade-right" data-aos-duration="1000"
            data-aos-delay="100">
            <img src="/assets/images/ilus-3.png" class="width-100p rounded-4 margin-bottom-50 margin-md-bottom-20"
                alt="Masukkan Akun">
            <h4 class="fw-bold">Masukkan Akun</h4>
            <p class="width-100p">Sebelum kamu mulai voting, masuk dulu ke akunmu</p>
        </div>
        <div class="col-12 col-md-4 margin-md-bottom-35 margin-bottom-0" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">
            <img src="/assets/images/ilus-2.png" class="width-100p rounded-4 margin-bottom-50 margin-md-bottom-20"
                alt="Baca Informasi">
            <h4 class="fw-bold">Baca Informasi</h4>
            <p class="width-100p">Cermati setiap kandidat biar kamu ga salah pilih</p>
        </div>
        <div class="col-12 col-md-4 margin-md-bottom-35 margin-bottom-0" data-aos="fade-left" data-aos-duration="1000"
            data-aos-delay="1000">
            <img src="/assets/images/ilus-1.png" class="width-100p rounded-4 margin-bottom-50 margin-md-bottom-20"
                alt="Pilih Kandidat">
            <h4 class="fw-bold">Pilih Kandidat</h4>
            <p class="width-100p">Jika kamu sudah menentukan pilihanmu, selanjutnya kamu bisa vote di halaman profil
                kandidat</p>
        </div>
    </div>

    <!-- Panitia Kami -->
    <div class="margin-bottom-50 margin-md-bottom-25 margin-xs-bottom-15 margin-top-100 margin-x-45 margin-xs-10">
        <h1 class="text-center fw-bold">Panitia Web Dev E-Vote 2023</h1>
        <span class="under-line"></span>
        <p class="text-center width-75p mx-auto mt-3" data-aos="fade-down" data-aos-duration="1000">Berikut adalah panitia
            yang berperan dalam pembuatan website e-vote 2023</p>
    </div>
    <div class="margin-x-45 margin-xs-x-10 margin-bottom-100 overflow-hidden">
        <div class="row position-relative overflow-hidden">
            <div class="col-10 col-md-3 col-sm-6 padding-03 mx-auto mx-sm-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="0">
                <img src="/assets/images/FotoPanitia/nayif.png" alt="" class="w-100 rounded-3 bg-warning">
            </div>
            <div class="col-10 col-md-3 col-sm-6 padding-03 mx-auto mx-sm-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="0">
                <img src="/assets/images/FotoPanitia/midori.png" alt="" class="w-100 rounded-3 bg-warning">
            </div>
            <div class="col-10 col-md-3 col-sm-6 padding-03 mx-auto mx-sm-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="0">
                <img src="/assets/images/FotoPanitia/eful.png" alt="" class="w-100 rounded-3 bg-warning">
            </div>
            <div class="col-10 col-md-3 col-sm-6 padding-03 mx-auto mx-sm-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="0">
                <img src="/assets/images/FotoPanitia/altaf.png" alt="" class="w-100 rounded-3 bg-warning">
            </div>
        </div>
    </div>

    <div class="d-flex height-15 height-md-075 justify-content-center margin-bottom-25 overflow-hidden position-relative">
        <img src="/assets/images/UI/Icon/logo_pdr.png" alt="" class="margin-end-25" data-aos="fade-right"
            data-aos-duration="1000" data-aos-delay="100">
        <img src="/assets/images/UI/Icon/logo-smkn1-karawang.png" alt="" class="margin-end-25"
            data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
    </div>
    <p class="width-60p width-md-80p text-center mx-auto margin-bottom-100 fw-semibold" data-aos="fade-down"
        data-aos-duration="1000" data-aos-delay="600">
        Website ini dirancang dan dikelola oleh tim Pejuang Daring untuk Pemilihan Ketua OSIS SMKN 1 Karawang Tahun
        2023/2024
    </p>
@endsection
