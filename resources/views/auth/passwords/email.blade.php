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
                                    <h1 class="h4 text-gray-900 mb-4">Quên mật khẩu!</h1>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="row mb-3 d-flex justify-content-center">
                                            {{-- <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                            <div class="col-md-6 ">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                                    placeholder="Nhập email...">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                </div>
                                <hr>
                                <div class="d-flex gap-4 justify-content-center">
                                    @if (Route::has('login'))
                                        <li class="nav nav-item">
                                            <a class="nav-link"
                                                href="{{ route('login') }}">{{ __('Bạn đã có tài khoản? Quay lại trang đang nhập!') }}</a>
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
