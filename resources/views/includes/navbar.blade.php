<!-- Navbar -->
<nav class="navbar navbar-dark navbar-expand-lg bg-red rounded-4 margin-top-125 margin-top-md-10 margin-xs-top-05 margin-x-45 margin-xs-10 top-4 fixed-top shadow-md">
    <div class="container-fluid padding-x-40 padding-md-x-15 padding-y-05">
        <a class="navbar-brand margin-end-40 margin-xs-end-00" href="index.html">
            <img src="/assets/images/UI/Icon/logo-white.svg" alt="E-Vote" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'link-active' : '' }} white fontw-5 margin-x-15 pb-1" href="/">Home</a>
                    <span class="{{ (request()->is('/')) ? 'nav-link-active' : 'd-none' }}"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('kandidat', 'profil')) ? 'link-active' : '' }} white fontw-5 margin-x-15 pb-1" href="/kandidat">Kandidat</a>
                    <span class="{{ (request()->is('kandidat', 'profil')) ? 'nav-link-active' : 'd-none' }}"></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('informasi')) ? 'link-active' : '' }} white fontw-5 margin-x-15 pb-1" href="/informasi">Tentang Voting</a>
                    <span class="{{ (request()->is('informasi')) ? 'nav-link-active' : 'd-none' }}"></span>
                </li>
            </ul>
            @if (auth()->id())
                @if (Auth::user()->is_admin)
                    <a href="admin" class="btn-white rounded-pill fontw-5 shadow-md margin-start-md-0 margin-start-10">Dashboard</a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="btn-white rounded-pill fontw-5 shadow-md margin-start-md-0 margin-start-10" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                            <i class="fas fa-sign-out-alt"></i>

                            {{ __('Log Out') }}
                        </a>
                    </form>
            @else
                <button type="button" class="btn-white rounded-pill fontw-5 shadow-md margin-start-md-0 margin-start-10" data-bs-toggle="modal" data-bs-target="#ModalLogin">
                    Login
                </button>  
        @endif
        </div>
    </div>
</nav>
