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
                                    <h1 class="h4 text-gray-900 mb-4">Đặt lại mật khẩu!</h1>
                                </div>
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="row mb-3 d-flex justify-content-center">
                                        {{-- <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ email') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $email ?? old('email') }}" required autocomplete="email"
                                                autofocus placeholder="Địa chỉ email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 d-flex justify-content-center">
                                        {{-- <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password" placeholder="Mật khẩu">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 d-flex justify-content-center">
                                        {{-- <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Xác nhận mật khẩu') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password" placeholder="Xác nhận mật khẩu">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-danger w-100">
                                                {{ __('Đặt lại mật khẩu') }}
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
