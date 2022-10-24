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
                <img src="/assets/images/UI/Icon/logo-red.svg" alt="" class="width-10 width-md-20 width-xs-30 mx-auto text-center margin-bottom-20">
                <span class="width-25p mx-auto red">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-patch-check-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                    </svg>                    
                </span>
            </div>
            
            <h2 class="fontw-7 text-center">Terimakasih Muhammad Padli !</h2>
            <h5 class="fontw-6 text-center margin-bottom-15">Dari kelas XII RPL 2</h5>
            <p class="text-center width-35 width-md-70p width-xs-100p mx-auto">Dengan memilih, anda sudah melaksanakan Pemilihan Calon Ketua OSIS
                SMKN 1 Karawang tahun 2022/2023
            </p>
        </div>
        <img src="/assets/images/UI/Background/background-konfirmasi.svg" alt="" class="position-absolute top-50 start-80 start-md-90 start-lg-100 translate-middle height-100 height-md-80p">
    </div>

    <!-- Button Back -->
    <div class="position-fixed bottom-025 bottom-sm-5 bottom-xs-15 d-flex justify-content-center width-100p z-2 button-vote">        
        <a href="index.html" class="btn-red fontw-7 font-10 rounded-pill shadow-md">Back</a>
    </div>
    
@endsection