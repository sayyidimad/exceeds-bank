@extends('layouts.app')

@section('title', 'EXCEEDS - Homepage')

@section('page-head-title')
    @if (!(request()->routeIs('landing-page')))
    <a href="{{ url()->previous() }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
        </svg>
    </a>
    @endif
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/homepage"><span class="logo-brand">EXCEEDS</span><span class="th-3">Mobile</span></a>
@endsection

@section('content')
<div class="mt-4 px-4">
    <div class="container my-blue-card balance-shadow  px-4">
        <div class="row justify-content-center align-items-center" >
            <div class="col-8 text-center p-1">
                <h6 class="th-4">Saldo Rekening Utama</h6>
                <h3 class="th-4 p-2">
                    <span class="fs-6">Rp</span>
                    <span class="th-4 number-hidden ls-1">***********</span>
                    <span class="th-2 number-visible" style="display: none">32.000.000</span>
                    <a class="toggle-number-btn">
                        <span class="ms-1"><i class="bi bi-eye"></i></span>
                    </a>
                </h3>
                <div class="col-12 p-2">
                  <h8 class="th-4 text-blue-primary buttonOutlineSecondary text-small">Rekening Lain</h8>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <table class="table table-full-width table-borderless">
            <div class="transparent-background">
                <tr class="d-flex justify-content-center">
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/pulsa.png') }}" alt="" width="64px">
                    </td>
                    <td class="col text-center">
                        <a href="{{ route('transfer') }}">
                            <img src="{{ asset('img/fast-menu/transfer.png') }}" alt="" width="64px">
                        </a>
                    </td>
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/dompet-digital.png') }}" alt="" width="64px">
                    </td>
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/qris.png') }}" alt="" width="64px">
                    </td>
                </tr>
                <tr class="d-flex justify-content-center transparent-background" style="align-items: center; margin-top: -12px">
                    <td class="col text-center">
                        <p class="th-3">Pulsa/Data</p>
                    </td>
                    <td class="col text-center">
                        <a href="{{ route('transfer') }}">
                            <p class="th-3">Transfer</p>
                        </a>
                    </td>
                    <td class="col text-center">
                        <p class="th-3">Dompet <br> Digital</p>
                    </td>
                    <td class="col text-center">
                        <p class="th-3">QRIS</p>
                    </td>
                </tr>
            </div>
            <div class="transparent-background" style="">
                <tr class="d-flex justify-content-center" style="margin-top: -24px">
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/promo.png') }}" alt="" width="64px">
                    </td>
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/tarik-tunai.png') }}" alt="" width="64px">
                    </td>
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/listrik.png') }}" alt="" width="64px">
                    </td>
                    <td class="col text-center">
                        <img src="{{ asset('img/fast-menu/lainnya.png') }}" alt="" width="64px">
                    </td>
                </tr>
                <tr class="d-flex justify-content-center transparent-background" style="align-items: center; margin-top: -12px">
                    <td class="col text-center">
                        <p class="th-3">Promo</p>
                    </td>
                    <td class="col text-center">
                        <p class="th-3">Tarik Tunai</p>
                    </td>
                    <td class="col text-center">
                        <p class="th-3">Listrik</p>
                    </td>
                    <td class="col text-center">
                        <p class="th-3">Lainnya</p>
                    </td>
                </tr>
            </div>
        </table>
    </div>

    {{-- <div class="">
        <h4 class="th-2 text-blue-secondary" style="margin-top: -12px; ">Terhubung dengan : </h4>
        <div class="container my-white-card bottom-shadow top-shadow" st>
            <div class="row">
                <div class="col">
                    <h4>Logo GoPay</h4>
                </div>
                <div class="col">
                    <h4>GoPay</h4> <br>
                    <h4>Hubungkan</h4>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="mt-4">
        <h4 class="th-2 text-blue-secondary" style="margin-top:">Catatan Keuangan</h4>
        <div class="mt-3 balance-shadow p-1 container my-white-card d-flex justify-content-center align-items-center flex-column">
            <div class="row text-grey">
              <div class="col text-center">
                <div class="d-flex align-items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#36AE7C" class="bi bi-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </span>
                    <h4 class="mt-1 text-grey-primary text-medium">Pemasukan</h4>
                </div>
                <h4 class="th-2 mt-1"><span class="text-medium ">Rp</span>4.132.500</h4>
              </div>
              <div class="col text-center">
                <div class="d-flex align-items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#DF2E38" class="bi bi-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                        </svg>
                    </span>
                    <h4 class="mt-1 text-grey-primary text-medium">Pengeluaran</h4>
                </div>
                <div class="d-flex align-items-center">
                    <span class="text-medium th-2">-</span>
                    <span class="text-medium th-2">Rp</span>
                    <h4 class="th-2 mt-1">4.432.500</h4>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center"></div>
                <span>Selisih</span>
                {{-- TODO: Ntar pake class text-green kalo dia slisihnya positif --}}
                {{-- <h4 class="th-2 mt-1"><span class="text-medium text-green">Rp</span>300.000</h4> --}}
                <h4 class="th-2 mt-1 text-red"><span class="text-medium">-Rp</span>300.000</h4>
            </div>
          </div>

    </div>




    @include('partials.bottom-nav')

</div>
@stop

<script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggleButton = document.querySelector(".toggle-number-btn");
      const numberHidden = document.querySelector(".number-hidden");
      const numberVisible = document.querySelector(".number-visible");

      toggleButton.addEventListener("click", function() {
        if (numberHidden.style.display === "none") {
          numberHidden.style.display = "inline";
          numberVisible.style.display = "none";
        } else {
          numberHidden.style.display = "none";
          numberVisible.style.display = "inline";
        }
      });
    });
</script>
