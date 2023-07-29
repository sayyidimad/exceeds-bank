
@extends('layouts.app')

@section('title', 'EXCEEDS - Login')

@section('page-head-title')
    @if (!(request()->routeIs('landing-page')))
    <a href="{{ url()->previous() }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
        </svg>
    </a>
    @endif
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/login"><span class="logo-brand">EXCEEDS</span><span class="th-3">Mobile</span></a>
@endsection

@section('content')
<div class="mt-5" style="max-width: 425px; margin: 0 auto;">
    <h1 class="th-2 text-center text-blue-primary">Selamat Datang</h1>

    <div class="text-center mt-5">
        <img src="{{ asset('img/game-day.svg') }}" alt="Deskripsi Gambar" class="mx-auto" style="max-width: 800px; max-height: 600px; width: 100%; height: auto;">
    </div>

    <div class="mt-5 container px-1">
        <div class="">
            <div class="px-1 py-1">
                <h4 class="th-2 text-blue-secondary">Login</h4>
                <div class="">
                    <div class="px-1">
                        <div class="inputGroup" style="width:100%">
                            <input type="text" required="" autocomplete="off">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="inputGroup" style="width:100%">
                            <input type="password" required="" autocomplete="off">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="">
                        <a style="margin-left: 200px;" href="#" class="text-small th-2 text-blue-secondary text-right">Lupa Username/ Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="footer ">
        <a href="{{ route('homepage') }}">
            <button class="buttonPrimary btn-login w-100 th-2 indent-right">Login</button>
        </a>
    </div>

</div>
@stop
