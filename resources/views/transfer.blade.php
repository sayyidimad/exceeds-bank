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
    <form action="">
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
            <div class="mb-3">
                <label for="nominal" class="th-3 text-blue-secondary form-label">Nominal Transfer</label>
                <div class="input-group" >
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="var(--blue-secondaryHex)" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg>
                    </span>
                    <input class="form-control" type="number" value="Soeko" name="nominal" id="nominal">
                </div>
            </div>
            <div class="mt-4">
                <label for="select-label" class="th-3 text-blue-secondary form-label">Catat Jenis Pengeluaran</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="var(--blue-secondaryHex)" class="bi bi-tag" viewBox="0 0 16 16">
                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                        </svg>
                    </span>
                    <select class="form-select" aria-label="Default select example" id="select-label">
                        <option selected value="other">Other</option>
                        <option value="family">Family</option>
                        <option value="education">Education</option>
                        <option value="book">Book</option>
                        <option value="hobby">Hobby</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label for="select-source" class="th-3 text-blue-secondary form-label">Sumber Dana</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="var(--blue-secondaryHex)" class="bi bi-wallet" viewBox="0 0 16 16">
                            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                          </svg>
                    </span>
                    <select class="form-select" aria-label="Default select example" id="select-source">
                        <option selected value="0">Sumber Dana</option>
                        <option value="0055 2812 0210">0055 2812 0210</option>
                        <option value="0123 2831 9991">0123 2831 9991</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="footer ">
            <a href="{{ route('mutation') }}">
                <button class="buttonPrimary btn-login w-100 th-2 indent-right">Transfer</button>
            </a>
        </div>
    </form>
</div>


@stop

