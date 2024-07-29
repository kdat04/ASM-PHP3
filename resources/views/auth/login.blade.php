@extends('client.layouts.master')
@section('content')
    <div class="bg-gradient-primary">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image">
                            <img class=" ms-2 rounded-2" src="{{ asset('img/a08c9b45-420e-4d2c-b7bd-e026deb4a38d.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Chào mừng trở lại!</h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12 d-flex justify-content-center gap-2">
                                        <div class="d-flex justify-content-center bg-primary p-2  rounded-2"
                                            style="width: 220px;"><a href="#"
                                                class="text-light text-decoration-none"><i
                                                    class="fa-brands fa-facebook text-bg-primary"></i>
                                                FACEBOOK</a></div>
                                        <div class="d-flex justify-content-center bg-danger p-2 rounded-2"
                                            style="width: 220px;"><a href="#"
                                                class="text-decoration-none text-light"><i
                                                    class="fa-brands fa-google me-1"></i>GOOGLE</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3 d-flex justify-content-center">
                                        {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Nhập email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 d-flex justify-content-center  ">
                                        {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Nhập mật khẩu">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <div class=" d-flex justify-content-center align-items-center gap-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Nhớ tôi') }}
                                                </label>
                                            </div>
                                            <div>
                                                @if (Route::has('password.request'))
                                                    <a class="btn nav-link" href="{{ route('password.request') }}">
                                                        {{ __('Quên mật khẩu') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-danger w-100">
                                                {{ __('Đăng nhập') }}
                                            </button>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </form>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    @if (Route::has('register'))
                                        <li class="nav nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Tạo mới tài khoản') }}</a>
                                        </li>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
