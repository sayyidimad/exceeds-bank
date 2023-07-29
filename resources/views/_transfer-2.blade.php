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

    <div class="footer ">
        <a href="{{ route('transfer-2') }}">
            <button class="buttonPrimary btn-login w-100 th-2 indent-right"></button>
        </a>
    </div>
</div>

@stop

