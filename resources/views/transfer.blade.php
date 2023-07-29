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
    <a class="navbar-brand nav-bg-blue-primary mx-auto" href="/Transfer"><span class="th-3">Transfer</span></a>
@endsection

@section('content')
<div class="mt-2 px-4">
    {{-- TODO: FORM E KU KOMEN BUAT SIMULASI --}}
    {{-- <form action=""> --}}
        <div class="mt-4">
            <label for="select-bank" class="th-3 text-blue-secondary form-label">Bank Tujuan</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="var(--blue-secondaryHex)" class="bi bi-bank" viewBox="0 0 16 16">
                        <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                    </svg>
                </span>
                <select class="form-select" aria-label="Default select example" id="select-bank">
                    <option selected>Bank Tujuan</option>
                    <option value="bri">BRI</option>
                    <option value="bca">BCA</option>
                    <option value="neo">NEO BANK</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-norek" class="th-3 text-blue-secondary form-label">Nomor Rekening Penerima</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="var(--blue-secondaryHex)" class="bi bi-credit-card" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" id="input-norek" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>
        </div>
        {{-- </form> --}}
        <div class="footer ">
            <a href="{{ route('transfer-2') }}">
                <button class="buttonPrimary btn-login w-100 th-2 indent-right">Transfer</button>
            </a>
        </div>
</div>


@stop

