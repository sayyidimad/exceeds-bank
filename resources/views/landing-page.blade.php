@extends('layouts.app')

@section('title', 'EXCEEDS')

@section('page-head-title')
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/"><span class="logo-brand">EXCEEDS</span><span class="th-3">Mobile</span></a>
@endsection

@section('content')
<div class="mt-5" style="max-width: 425px; margin: 0 auto;">
    <h1 class="th-2 text-center text-blue-primary">Selamat Datang</h1>

    <div class="text-center mt-5">
        <img src="{{ asset('img/game-day.svg') }}" alt="Deskripsi Gambar" class="mx-auto" style="max-width: 800px; max-height: 600px; width: 100%; height: auto;">
    </div>

    <div class="mt-5 container py-5 px-1">
        <div class="py-3">
            <div class="px-1">
                <h4 class="th-2 text-blue-secondary">Fast Menu</h4>
                <div class="row px-4">
                    <div class="col-3 d-flex flex-column justify-content-center align-items-center" >
                        <img src="{{ asset('img/fast-menu/promo.png') }}" alt="" width="72px">
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('img/fast-menu/pulsa.png') }}" alt="" width="72px">
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('img/fast-menu/dompet-digital.png') }}" alt="" width="72px">
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('img/fast-menu/qris.png') }}" alt="" width="72px">
                    </div>
                </div>

                <div class="row px-4">
                    <table class="">
                        <tr>
                            <td class="col-3 text-center  ">
                                <span class="th-3" >Promo</span>
                            </td>
                            <td class="col-3 text-center  ">
                                <span class="th-3">Pulsa/Data</span>
                            </td>
                            <td class="col-3 text-center  ">
                                <span class="th-3">Dompet <br> Digital</span>
                            </td>
                            <td class="col-3 text-center  ">
                                <span class="th-3">QRIS</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="footer ">
        <a href="{{ route('login') }}">
            <button class="buttonPrimary btn-login w-100 th-2">Login</button>
        </a>
    </div>

</div>
@stop
