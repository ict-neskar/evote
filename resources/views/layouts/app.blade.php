<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E - Vote | @yield('title')</title>

    @stack('prepend-style')
    @include('includes.styles')
    
</head>

<body>
    @include('includes.navbar')

    <!-- Modal Login -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content overflow-hidden rounded-4 padding-x-md-10">
                <div class="modal-body height-70 height-xs-50 position-relative d-flex">
                    <button type="button" class="btn-close position-absolute top-1 top-md-025 end-1 end-md-025"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="width-50p d-none d-md-flex align-items-center position-relative">
                        <img src="/assets/images/UI/Ilustrasi-avatar.svg" alt="" class="height-80p position-relative z-1">
                        <img src="/assets/images/UI/Background/background-login.svg" class="img-bgilustration-login">
                    </div>
                    <div class="width-50p width-md-100p padding-md-x-10 padding-x-15 padding-y-50 padding-xs-y-15">
                        <h2 class="fontw-7 font-10">LOGIN</h2>
                        <h1 class="fontw-7 font-15 margin-bottom-20">YOUR ACCOUNT</h1>
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="margin-bottom-10">
                                <label for="nis" class="form-label fontw-6">NIS</label>
                                <div class="input-group border-bottom">
                                    <span class="input-group-text bg-white border-0">
                                        <iconify-icon inline icon="bx:user" style="color: #6d6d6d;"></iconify-icon>
                                    </span>
                                    <input required type="text" name="nis" class="form-control border-0" id="nis">
                                </div>
                            </div>
                            <div class="margin-bottom-20">
                                <label for="password" class="form-label fontw-6">Password</label>
                                <div class="input-group border-bottom">
                                    <span class="input-group-text bg-white border-0">
                                        <iconify-icon inline icon="uil:padlock" style="color: #6d6d6d;"></iconify-icon>
                                    </span>
                                    <input required type="password" name="password" class="form-control border-0" id="password">
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
        </div>
    </div>

    <!-- Alert Login Success -->
    <!-- <div class="w-100 alert alert-success d-flex align-items-center justify-content-between padding-x-50 padding-md-x-30 padding-xs-x-10 position-fixed bottom-0 z-4" role="alert">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill me-2"
                viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <strong>Login Berhasil!</strong> Mari tentukan pilihanmu
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->

    <!-- Alert Login Gagal -->
    <!-- <div class="w-100 alert alert-danger d-flex align-items-center justify-content-between padding-x-50 padding-md-x-30 padding-xs-x-10 position-fixed bottom-0 z-4" role="alert">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <strong>Login gagal!</strong> Tampaknya ada yang salah
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->


    
    <!-- Mark Page -->
    <script>
        const page = "home";
        AOS.init();
    </script>

    @yield('content')

    @include('includes.footer')
    
    @stack('addon-script')
    @include('includes.scripts')
    
    </body>
    
    </html>