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
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/"><span class="logo-brand">EXCEEDS</span><span class="th-3">Mobile</span></a>
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
                        <img src="{{ asset('img/fast-menu/promo.png') }}" alt="" width="64px">
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
                        <p class="th-3">Transfer</p>
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





    <nav class="top-shadow navbar fixed-bottom nav-bottom">
        <div class="container-fluid">
            {{-- <div class="row"> --}}
                <a href="/homepage">
                    <div class="col justify-content-center">
                        <div class="row mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="{{ request()->routeIs('homepage') ? 'var(--blue-secondaryHex)'  : 'var(--grey-primary)'}}" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg>
                        </div>
                        <div class="row mt-1"><p class="text-center {{ request()->routeIs('homepage') ? 'text-blue-secondary th-3'  : 'text-grey-primary th-4'}} ">Home</p></div>
                    </div>
                </a>
                <div class="col text-center">
                    <div class="row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="{{ request()->routeIs('mutation') ? 'var(--blue-secondaryHex)'  : 'var(--grey-primary)'}}" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                          </svg>
                    </div>
                    <div class="row mt-1"><p class="text-center {{ request()->routeIs('mutation') ? 'text-blue-secondary th-3'  : 'text-grey-primary th-4'}} ">Mutasi</p></div>
                </div>
                <div class="col-4 text-center">
                    <div class="row justify-content-center align-items-center" style="margin-top: -56px">
                        <div class="bg-circle">
                            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                                <!-- Isi dari SVG QRIS di sini -->
                                <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 .5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                                <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                                <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                                <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                                <path d="M12 9h2V8h-2v1Z"/>
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="col text-center">
                    <div class="row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="{{ request()->routeIs('activity') ? 'var(--blue-secondaryHex)'  : 'var(--grey-primary)'}}" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </div>
                    <div class="row mt-1"><p class="text-center {{ request()->routeIs('activity') ? 'text-blue-secondary th-3'  : 'text-grey-primary th-4'}} ">Aktivitas</p></div>
                </div>
                <div class="col text-center">
                    <div class="row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="{{ request()->routeIs('account') ? 'var(--blue-secondaryHex)'  : 'var(--grey-primary)'}}" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>
                    <div class="row mt-1"><p class="text-center {{ request()->routeIs('account') ? 'text-blue-secondary th-3'  : 'text-grey-primary th-4'}} ">Akun</p></div>
                </div>
            {{-- </div> --}}
        </div>
    </nav>

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
