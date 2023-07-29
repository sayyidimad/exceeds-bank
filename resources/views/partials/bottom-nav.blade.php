
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
            <div class="col text-center" style="margin-left: 16px">
                <a href="/mutation">
                    <div class="row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="{{ request()->routeIs('mutation') ? 'var(--blue-secondaryHex)'  : 'var(--grey-primary)'}}" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                          </svg>
                    </div>
                    <div class="row mt-1"><p class="text-center {{ request()->routeIs('mutation') ? 'text-blue-secondary th-3'  : 'text-grey-primary th-4'}} ">Mutasi</p></div>
                </a>
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
