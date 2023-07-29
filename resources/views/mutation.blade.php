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
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/mutation"><span class="th-3">Mutasi</span></a>
@endsection

@section('content')
<div class="mt-2 px-4">
    <div class="d-flex align-items-center justify-content-center">
        <div class="radio-input">
            <label>
                <input type="radio" id="simple" name="value-radio" value="simple" checked>
                <span class="th-2">Simple</span>
            </label>
            <label>
              <input type="radio" id="advance" name="value-radio" value="advance">
                <span class="th-2">Advance</span>
            </label>
            <span class="selection"></span>
        </div>
    </div>

    {{-- INI NTAR CONTOH --}}
    <div id="simple-mode">
        <div class="row mt-3">
            <div class="col-6">
                <select class="form-select text-small" aria-label="Default select example">
                    <option selected value="0">Sumber Rekening</option>
                    <option value="0055 2812 0210">0055 2812 0210</option>
                    <option value="0123 2831 9991">0123 2831 9991</option>
                </select>
            </div>
            <div class="col-6">
                <select class="form-select text-small" aria-label="Default select example">
                    <option selected value="0">Rentang Waktu</option>
                    <option value="today">Hari Ini</option>
                    <option value="week">Minggu Ini</option>
                    <option value="month">Bulan ini</option>
                    <option value="three-month">3 Bulan Terakhir</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mt-1 col-12">
                <select class="form-select text-small" aria-label="Default select example">
                    <option selected value="0">Jenis Transaksi</option>
                    <option value="cash-in">Uang Masuk</option>
                    <option value="cash-out">Uang Keluar</option>
                </select>
            </div>
        </div>


        <div class="row mt-3">
            <div class="bg-grey-secondary text-grey-primary th-3">28 Jul 2023</div>
            <div class="">
                <div class="row mt-2">
                    <div class="col-6">
                        <span class="th-3">BFST05007631</span>
                        <span class="th-3">NBMB: CENAIDJA</span>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <span class="th-3 justify-content-end align-items-end row">- Rp 2.500.000</span>
                            <span class="th-6 text-grey-primary text-small justify-content-end align-items-end row">23:45:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="bg-grey-secondary text-grey-primary th-3">30 Jul 2023</div>
            <div class="">
                <div class="row mt-2">
                    <div class="col-6">
                        <span class="th-3">BFST05007631</span>
                        <span class="th-3">NBMB: CENAIDJA</span>
                    </div>
                    <div class="col-6">
                        <div class="">
                            <span class="th-3 justify-content-end align-items-end row">- Rp 2.500.000</span>
                            <span class="th-6 text-grey-primary text-small justify-content-end align-items-end row">23:45:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




        {{-- TODO: SKIP PAKE MODAL TAKUT GK NUTUT --}}
        {{--
        <!-- Button trigger modal -->
        <button type="button" class="btn bg-blue-secondary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Sumber Rekening
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Sumber Rekening</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="option-1">
                            <label class="form-check-label" for="option-1">0055 0109 7750 212</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="option-2">
                            <label class="form-check-label" for="option-2">0055 0109 7750 212</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-grey-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-blue-secondary text-white">Pilih</button>
                    </div>
                </div>
            </div>
        </div> --}}


    <div id="advance-mode" style="display: none;">Advance</div>
</div>


<script>
  const simpleHeading = document.getElementById('simple-mode');
  const advanceHeading = document.getElementById('advance-mode');

  // Tangani peristiwa pergantian nilai radio button
  document.querySelectorAll('input[name="value-radio"]').forEach((radio) => {
    radio.addEventListener('change', (event) => {
      const selectedValue = event.target.value;

      // Sembunyikan dan tampilkan tag <h1> berdasarkan nilai radio button yang dipilih
      if (selectedValue === 'simple') {
        simpleHeading.style.display = 'block';
        advanceHeading.style.display = 'none';
      } else if (selectedValue === 'advance') {
        simpleHeading.style.display = 'none';
        advanceHeading.style.display = 'block';
      }
    });
  });
</script>

@include('partials.bottom-nav')
@stop


