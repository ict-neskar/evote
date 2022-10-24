@extends('layouts.warning')
@section('title')
    Masuk
@endsection

@section('content')
        <!-- Mark Page -->
    <script>
        const page = "login";
    </script>

    <!-- Page Start -->
    <div class="height-100 position-relative d-flex justify-content-between overflow-hidden">
        <div class="width-45p width-md-100p height-md-100p bottom-0 align-items-center position-relative position-md-absolute">
            <img src="/assets/img/UI/Ilustrasi-avatar.svg" alt="" class="height-80p position-relative bottom-0 z-1 d-xs-none d-block">
            <img src="/assets/img/UI/Background/background-login.svg" class="position-absolute height-90p start-0 bottom-0 start-xs--50p">
        </div>
        <div class="width-50p width-md-100p position-relative z-1">
            <div class="position-absolute top-50 start-50 translate-middle width-80p">
                <h2 class="fontw-7 font-10">LOGIN</h2>
                <h1 class="fontw-7 font-15 margin-bottom-20">YOUR ACCOUNT</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="margin-bottom-10">
                        <label for="nis" class="form-label fontw-6">NIS</label>
                        <div class="input-group border-bottom">
                            <span class="input-group-text bg-white border-0">
                                <iconify-icon inline icon="bx:user" style="color: #6d6d6d;"></iconify-icon>
                            </span>
                            <input required type="text" name="nis" class="form-control border-0" id="username">
                        </div>
                    </div>
                    <div class="margin-bottom-20">
                        <label for="password" class="form-label fontw-6">Password</label>
                        <div class="input-group border-bottom">
                            <span class="input-group-text bg-white border-0">
                                <iconify-icon inline icon="uil:padlock" style="color: #6d6d6d;"></iconify-icon>
                            </span>
                            <input required type="password" class="form-control border-0" name="password" id="password">
                            <span class="input-group-text bg-white border-0 " id="togglePassword">
                                <iconify-icon inline icon="bi:eye" style="color: #6d6d6d;" id="iconTogglePassword">
                                </iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end width-100p">
                        <button type="submit" class="btn btn-danger rounded-pill padding-x-15 bg-red">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection