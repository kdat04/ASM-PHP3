<?php use Carbon\Carbon;
Carbon::setLocale('vi'); ?>
<header>
    <div class="header_toolbar " style="font-size: 13px">
        <div class="row d-flex ">
            <div class="col-8 ">
                <ul class="nav navbar navbar-expand-lg navbar-light bg-light gap-3">
                    <li><i class="fa-solid fa-phone-volume me-2"></i>0914.914.999</li>
                    <li>|</li>
                    <li><i class="fa-regular fa-envelope me-2"></i>Email:
                        thuky@baotintuc.vn</li>
                    <li>|</li>
                    <li><i class="fa-brands fa-facebook me-2"></i>Fanpage</li>
                </ul>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <ul class="nav navbar navbar-expand-lg navbar-light bg-light gap-3">
                    <li class="">
                        {{ ucfirst(Carbon::now()->isoFormat('dddd')) }}
                        {{ Carbon::now()->isoFormat('D') }}/{{ Carbon::now()->isoFormat('MM') }}/{{ Carbon::now()->isoFormat('YYYY') }}
                        |
                        {{ Carbon::now()->isoFormat('HH:mm:ss') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_logo_banner mt-0 mb-0">
        <div class="row">
            <div class="col-3">
                <a href=""><img src="{{ asset('img/logo.jpg') }}" style=" width: 100%;" height="150px"></a>
            </div>
            <div class="col-9 mt-3 ">
                <div class="col-12 d-flex justify-content-end">
                    <div class="col-6 rounded-1"><a href="#"><img src="{{ asset('img/banner1.jpg') }}" alt
                                style=" width: 100%;" height="110px"></a></div>
                    <div class="col-6 rounded-1"><a href="#"><img src="{{ asset('img/banner2.jpg') }}" alt
                                style=" width: 100%;" height="110px"></a></div>
                </div>
            </div>
        </div>
    </div>
    <nav class="menu_hd_ft navbar navbar-expand-lg ">
        <a class="navbar-brand" href="{{ route('client.home') }}"><i class="fa-solid fa-house text-light"></i></a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse ">
            <ul class="menu-cha navbar-nav me-auto mb-2 mb-lg-0 fw-semibold " style="font-size: 14px">
                @for ($i = 0; $i < $loadAll->count(); $i++)
                    @if ($i < 11)
                        <li class="nav-item ">
                            <a class="nav-link active text-light"
                                href="{{ route('client.trangdm', $loadAll[$i]) }}">{{ $loadAll[$i]->name }}</a>
                            <ul class="menu-con navbar-nav" style="font-size: 13px">
                                @foreach ($loadAll[$i]->children as $load)
                                    <li><a class="nav-link active"
                                            href="{{ route('client.trangdm', $load->id) }}">{{ $load->name }}</a>
                                    </li>
                                    <div class="dashed-line"></div>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endfor
            </ul>
            {{--  --}}
            <div class="me-2">
                @guest
                    @if (Route::has('login'))
                        <li class="nav nav-item">
                            <a class="btn btn-outline-light"
                                href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                        </li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav nav-item dropdown" style="list-style: none">
                        <a id="navbarDropdown" class="dropdown-toggle btn btn-outline-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Đăng xuất') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
            {{--  --}}
            <form class="d-flex" role="search" action="{{ route('client.search') }}" method="POST">
                @csrf
                <div>
                    <a href="{{ route('client.search') }}">
                        <button class="btn btn-outline-light" type="submit"><i
                                class="fa-solid fa-magnifying-glass .text-body-emphasis"></i></button>
                    </a>
                </div>
            </form>
        </div>
    </nav>

</header>
