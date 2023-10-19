@extends('layouts.admin')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="page-heading">
        <h3>Voting Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldUser"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Total Students</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlah_user }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldVolume-Up"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Has Voted</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlah_voted }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldVolume-Off"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Not Yet Voted</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlah_notvoted }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="/assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                        <h6 class="text-muted mb-0">@ {{ Auth::user()->name }}</h6>
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="btn-danger rounded-pill fontw-5 shadow-md margin-start-md-0 margin-start-10"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit(); "
                                            role="button">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Logout
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistik -->
                <div class="w-100 margin-bottom-40 margin-top-15 position-relative">
                    @if ($candidates->count())
                        <div class="bg-red-linear padding-y-125 padding-x-20 padding-sm-x-15 padding-xs-10 width-75p width-xl-85p width-sm-80p width-xs-90p mx-auto rounded-4 d-flex flex-column flex-lg-row justify-content-between shadow-md row gx-4"
                            data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <!-- Card -->

                            @foreach ($candidates as $candidate)
                                <div class="col-12 col-md-4">
                                    <div class="bg-white-linear rounded-4 shadow-md overflow-hidden mb-lg-0 mb-4"
                                        style="--bs-aspect-ratio: 66%;">
                                        <div class="bg-circles padding-125 padding-end-00 row">
                                            <div class="col-12">
                                                <h1 class="fontw-9 font-15 mb-0">{{ $candidate->name }}</h1>
                                                <p class="red margin-bottom-10 font-xs-8">
                                                    {{ $candidate->class->kelas }}
                                                    {{ $candidate->class->jurusans }}
                                                    {{ $candidate->class->rombel }}</p>
                                                <div class="position-relative d-flex align-items-top margin-bottom-075">
                                                    <h1 class="font-40 fontw-9 red mb-0">{{ $candidate->votes }}
                                                    </h1>
                                                    <span class="fontw-7 font-075 red">Vote</span>
                                                </div>
                                                {{-- <div class="d-flex align-items-center">
                                                    <iconify-icon icon="akar-icons:clock" class="grey me-1"></iconify-icon>
                                                    <p class="mb-0 grey font-06 d-inline-block">
                                                        Terakhir update 1 jam yang lalu
                                                    </p>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            @else
                <div class="text-center">
                    <p>Kandidat tidak tersedia</p>
                </div>
                @endif
            </div>
        </section>
    </div>

@endsection

@push('addon')
@endpush
