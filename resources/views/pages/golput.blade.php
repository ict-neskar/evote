@extends('layouts.warning')
@section('title')
    Berhasil
@endsection

@section('content')
    <!-- Mark Page -->
    <script>
        const page = "voting-success";
        AOS.init();
    </script>

    <div class="height-100 position-relative width-100p overflow-hidden">
        <div class="position-absolute top-50 start-50 translate-middle width-50 width-md-90 z-1">
            <div class="d-flex flex-column justify-content-center margin-bottom-25">
                <img src="/assets/images/UI/Icon/logo-red.svg" alt="" class="width-075 width-md-15 width-xs-25 mx-auto text-center margin-bottom-20">
                <span class="width-25p mx-auto red">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-patch-exclamation-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </span>
            </div>
            <h2 class="fontw-7 text-center">Maaf, Waktu memilih sudah habis !</h2>
            <p class="text-center width-35 width-md-70p width-xs-100p mx-auto">
                Anda hanya dapat melakukan Pemilihan Calon Ketua OSIS SMKN 1 Karawang tahun 2022/2023 pada waktu yang sudah di tentukan
            </p>
        </div>
        <img src="/assets/images/UI/Background/background-konfirmasi.svg" alt="" class="position-absolute top-50 start-80 start-md-90 start-lg-100 translate-middle height-100 height-md-80p">
    </div>

    <!-- Button Back -->
    <div class="position-fixed bottom-5 bottom-sm-10 bottom-xs-15 d-flex justify-content-center width-100p z-2 button-vote">        
        <a href="/" class="btn-red fontw-7 font-10 rounded-pill shadow-md">Back</a>
    </div>

@endsection