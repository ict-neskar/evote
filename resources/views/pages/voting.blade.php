@extends('layouts.app')
@section('title')
    Voting
@endsection

@section('content')
<!-- Mark Page -->
<script>
    const page = "voting";
    AOS.init();
    </script>

<div class="margin-x-45 margin-xs-10 margin-y-100">
    <h2 class="fontw-9 text-center text-md-start margin-bottom-25" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">Pilihlah kandidat sesuai pilihanmu</h2>
    <div class="row justify-content-center g-4">
        @foreach ($candidates as $candidate)
        <div class="col-10 col-lg-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="0">
            <div class="rounded-4 width-100p bg-red d-flex justify-content-center position-relative padding-y-15 overflow-hidden">
                <img src="/assets/images/UI/Background/background-voting.svg" class="position-absolute width-75p top-0 end-0" alt="" srcset="">
                <div class="position-relative text-center margin-top-15">
                    <img src="{{ asset('storage/' . $candidate->image) }}" alt="" class="width-90p">
                    @if (auth()->id())
                    <div class="d-flex justify-content-center position-absolute bottom-0 w-100 padding-x-25">
                        <button data-bs-toggle="modal" data-bs-target="#modalVote{{ $candidate->id }}"
                            class="btn-white rounded-pill fontw-6 font-10 shadow-md width-100p d-inline-block z-1">
                            {{ $candidate->name }}
                        </button>
                    </div>
                    @else
                    <div class="d-flex justify-content-center position-absolute bottom-0 w-100 padding-x-25">
                        <button data-bs-toggle="modal" data-bs-target="#"
                            class="btn-white rounded-pill fontw-6 font-10 shadow-md width-100p d-inline-block z-1" disabled>
                            {{ $candidate->name }}
                        </button>
                    </div>
                    @endif
                </div>
                <span class="filter-linear-red-dark"></span>
            </div>
        </div>
        <!-- Modal Vote -->
        <div class="modal fade" id="modalVote{{ $candidate->id }}" tabindex="-1" aria-labelledby="modalVote" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form action="{{ route('chooseVoting') }}" method="post">
                    @csrf
                    <div class="modal-content overflow-hidden rounded-4 padding-x-md-10">
                        <div class="modal-body position-relative d-flex">
                            <button type="button" class="btn-close position-absolute top-1 top-md-025 end-1 end-md-025"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="width-40p position-relative d-none d-md-flex justify-content-center align-items-center">
                                <img src="/assets/images/UI/Ilustrasi-exclamation.svg" alt="" class="width-75p position-relative z-1">
                                <img src="/assets/images/UI/Background/background-konfirmasi.svg" class="img-bgilustration-vote">
                            </div>
                            <div
                                class="width-60p width-md-100p padding-md-x-10 padding-x-15 padding-y-20 padding-xs-y-15 text-md-start text-center">
                                <h1 class="fontw-7 font-20 margin-bottom-15">Hai {{ Auth::user()->name }} !</h1>
                                <p class="font-10 margin-bottom-20">Apakah anda yakin ingin memilih {{ $candidate->name }} ?
                                </p>
                                <div class="d-flex flex-column flex-sm-row width-100p justify-content-between mx-auto mx-md-0">
                                    <button class="rounded-pill btn-outline-red margin-xs-bottom-10 margin-bottom-00" data-bs-dismiss="modal" aria-label="Close">Kembali Memilih Kandidat</button>
                                    <button class="rounded-pill btn-red" name="candidateId" value="{{ $candidate->id }}">Ya, Saya Yakin</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        @endforeach


        </div>
    </div>


    <!-- Modal Selesai Vote -->
    <div class="modal fade" id="modalVoteConf" tabindex="-1" aria-labelledby="modalVoteConf" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content overflow-hidden rounded-4 padding-x-md-10">
                <div class="modal-body position-relative padding-y-30">
                    <button type="button" class="btn-close position-absolute top-1 top-md-025 end-1 end-md-025"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="d-flex justify-content-center margin-bottom-25">
                        <img src="/assets/images/UI/Icon/logo-red.svg" alt=""
                            class="width-075 width-md-15 width-xs-25 mx-auto text-center">
                    </div>
                    <h2 class="fontw-7 text-center margin-bottom-20">Terimakasih Muhammad Padli !</h2>
                    <div class="width-70p width-md-85p width-xs-100p mx-auto">
                        <p class="text-center">Dengan memilih, anda sudah melaksanakan Pemilihan Calon Ketua OSIS
                            SMKN 1 Karawang tahun 2022/2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
