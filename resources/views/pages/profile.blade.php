@extends('layouts.app')
@section('title')
    {{ $candidate->name }}
@endsection

@section('content')
    <!-- Mark Page -->
    <script>
        const page = "profile";
        AOS.init();
    </script>

    <div class="margin-x-45 margin-md-x-20 margin-xs-x-10 margin-top-80 position-relative">
        <div class="margin-x-10 bg-white rounded-4 shadow-md-extra-bottom position-relative overflow-hidden">
            <div class="bg-gray width-100p overflow-hidden position-relative" data-aos="fade-down" data-aos-duration="1000"
                data-aos-delay="100">
                <img src="/assets/images/kandidat-1-banner.png" alt="" class="width-100p">

                <!-- Default -->
                {{-- <img src="/assets/images/UI/Background/background-profile.svg" alt="" class="width-100p"> --}}
            </div>
            <div class="width-075 width-md-10 width-xs-15 rounded-circle overflow-hidden ratio ratio-1x1 border border-primary border-3 mx-auto position-relative bottom-0375 bottom-md-5 bottom-xs-075 bg-light"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('storage/' . $candidate->image) }}" alt="" class="height-100p">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h2 class="text-center fontw-9">{{ $candidate->name }}</h2>
                <p class="text-center fontw-6"> {{ $candidate->class->jurusanl }}</p>
            </div>

            <!-- Visi -->
            <div
                class="margin-x-40 margin-md-x-30 margin-xs-x-15 justify-content-between margin-bottom-40 d-flex flex-md-row flex-column-reverse">
                <div class="width-55p width-md-100p flex-column" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-delay="100">
                    <div class="margin-bottom-15">
                        <h3 class="fontw-7 font-15">Visi</h3>
                        <p class="fontw-5">{!! $candidate->visi !!}</p>
                    </div>
                    <div>
                        <h3 class="fontw-7 font-15">Misi</h3>
                        <p class="fontw-5">{!! $candidate->misi !!}</p>
                    </div>
                </div>
                <div class="width-40p width-md-100p margin-md-bottom-20 overflow-hidden" data-aos="fade-left"
                    data-aos-duration="1000" data-aos-delay="100">
                    <div class="ratio ratio-16x9 width-100p">
                        <!-- Link yang diganti sesudah "/embed" -->
                        <iframe class="width-100p height-100p" src="{{ $candidate->video }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- Program -->
            <div class="d-inline-block margin-x-40 margin-md-x-30 margin-xs-x-15 margin-bottom-30 margin-md-bottom-20">
                <h2 class="fontw-7 mb-1">Program</h2>
                <span class="under-line-left"></span>
            </div>
            <div class="d-flex flex-md-row flex-column margin-x-40 margin-md-x-30 margin-xs-x-15 justify-content-between margin-program"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                <div class="width-65p width-md-100p">
                    {!! $candidate->program !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Button Vote -->
    <div class="position-fixed bottom-5 bottom-sm-10 bottom-xs-15 d-flex justify-content-center width-100p z-2 button-vote">
        <a href="/kandidat" class="btn btn-light fontw-7 font-10 rounded-pill shadow-md me-3">Kembali</a>
        <a href="/voting" class="btn btn-primary fontw-7 font-10 rounded-pill shadow-md">Vote</a>
    </div>

    <!-- Dont Delete -->
    <div class="width-100p height-20"></div>
@endsection
