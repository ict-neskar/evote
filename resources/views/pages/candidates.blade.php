@extends('layouts.app')
@section('title')
    Kandidat
@endsection

@section('content')
    <script>
        AOS.init();
    </script>

    <!-- Header -->
    <div class="w-100 height-100 bg-red padding-top-75 position-relative margin-bottom-40 position-relative overflow-hidden">
        <div class="position-relative z-1" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
            <h1
                class="fontw-9 font-40 font-xs-325 font-sm-25 text-dark text-center margin-bottom-05 margin-xs-top-90 margin-md-top-15">
                Pemilihan Ketua OSIS</h1>
            <h3 class="text-dark text-center font-175 font-sm-10">SMK Nergeri 1 Karawang Tahun 2022/2023</h3>
        </div>
        <div class="w-100 height-100 d-flex justify-content-center align-items-end position-absolute bottom-0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="width-100p position-absolute bottom-0 d-flex justify-content-center">
                <img src="/assets/images/UI/Icon/kandidat-foto.png" alt=""
                    class="width-50 width-md-100p position-relative z-1">
            </div>
            <img src="/assets/images/UI/Background/bg-2.svg" alt=""
                class="height-85p height-md-80p height-xs-70p">
        </div>
    </div>
    
    <!-- Kandidat -->
    @if ($candidates->count())
        <div class="position-relative overflow-hidden">
            @foreach ($candidates as $candidate)
                <div class="mx-auto width-85p width-md-75p rounded-4 shadow-md d-flex flex-column-reverse flex-md-row-reverse-even margin-bottom-25"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="width-60p width-md-100p padding-x-15 padding-top-25 padding-bottom-50 padding-md-bottom-25">
                        <h1 class="fontw-9 font-25 font-md-20">{{ $candidate->name }}</h1>
                        <h4 class="fontw-5 margin-top-10 margin-bottom-15"> {{ $candidate->class->kelas }}
                            {{ $candidate->class->jurusans }} {{ $candidate->class->rombel }} </h4>
                        <div class="width-100p margin-bottom-30">
                            <p class="fontw-7">{!! $candidate->deskripsi !!}</p>
                        </div>
                        <a href="/kandidat/{{ $candidate->slug }}"
                            class="btn btn-red rounded-pill fontw-7 px-4 py-2 font-10 font-xs-075 mx-auto width-md-100p d-md-inline-block text-md-center">Lihat
                            Profil Selengkapnya</a>
                    </div>
                    <div class="width-40p width-md-75p margin-top-25 d-flex justify-content-center align-items-end mx-auto">
                        <div class="d-flex justify-content-center align-items-end width-90p position-relative">
                            <img src="{{ asset('storage/' . $candidate->image) }}" alt="Kandidat 1 | Nama Kandidat"
                                class="ratio ratio-1x1 position-relative z-1">
                            <div
                                class="position-absolute width-100p ratio ratio-1x1 top-50 start-50 translate-middle bg-gray rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center">
            <p>Belum ada kandidat</p>
        </div>
    @endif

@endsection
