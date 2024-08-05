@extends('client.layouts.master')
@section('content')
    <div class="row mt-2 custom-menu fw-semibold" style="font-size: 14px">
        <nav class="navbar navbar-expand-lg fw-semibold ms-2">
            <div class="collapse navbar-collapse ms-1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold opacity-75">
                    <li class="">{{ $loadNd->category->name }}</li>
                    <li class="ms-3 me-3"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="">{{ $loadNd->title }}</li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row d-flex justify-content-between mt-3">
        <div class="col-8" style="max-width: 840px">
            <div class="row title-ct">
                <h2 class="fw-bold">{{ $loadNd->title }}</h2>
            </div>
            <div class="dashed-line"></div>
            <div class="row ">
                <div class="col-6">
                    <ul class="nav navbar navbar-expand-lg navbar-light bg-light gap-3">
                        <li>
                            {{ $loadNd->created_at }}</li>
                        <li>|</li>
                        <li class="text-danger">
                            {{ $loadNd->category->name }}</li>
                    </ul>
                </div>
                <div class="col-6 d-flex justify-content-end gap-2  ">
                    <button class="btn btn btn-primary" style="font-size: 12px"><i class="fa-regular fa-thumbs-up"></i>
                        Thích 0</button>
                    <button class="btn btn btn-primary" style="font-size: 12px"><i class="fa-solid fa-share"></i> Chia
                        sẻ</button>
                </div>
            </div>
            <div class="dashed-line"></div>
            <div class="row">
                <h6 class="fw-bold summary">{{ $loadNd->short_description }} </h6>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-11">
                    <div class="text-center" style="font-size: 13px; background-color: rgb(211, 211, 211)">
                        <img src="{{ asset($loadNd->img) }}" alt="" style=" width: 100%;">
                        <span class="mt-anh text center">{{ $loadNd->img_description }}</span>
                    </div>
                    <p class="mt-3">{!! $loadNd->content !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <ul class="nav navbar navbar-expand-lg navbar-light bg-light ">
                    <a href="" class="nav-link active fw-bold">Tags:</a>
                    <li>
                        <a href="" class="nav-link active">....</a>
                    </li>
                    <li>/</li>
                    <li>
                        <a href="" class="nav-link active">...</a>
                    </li>
                    <li>/</li>

                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="row fw-semibold mt-2">
                <button class="btn btn-danger w-100">TIN MỚI</button>
                @foreach ($newPosts as $item)
                    <a href="{{ route('client.chitiettin', $item) }}" class="text-decoration-none text-dark">
                        <div class="row d-flex  mb-2 mt-1">
                            <div class="col-5">
                                <img src="{{ asset($item->img) }}" alt="" style=" width: 100%;">
                            </div>
                            <div class="col-7">
                                <h6 class="fw-bold" style="font-size: 14px">{{ $item->title }}
                                </h6>
                            </div>
                        </div>
                    </a>
                    <div class="dashed-line"></div>
                @endforeach
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5>Bình luận (14)</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Chia sẻ ý kiến của bạn" rows="3"></textarea>
                            @auth
                                <!--  -->
                                <button type="button" class="btn btn-danger w-100 mt-3">Bình luận</button>
                            @else
                                <!-- -->

                                <button type="button" class="btn btn-danger w-100 mt-3 opacity-75"
                                    style="width: 180px; font-size: 14px"
                                    onclick="window.location.href='{{ route('login') }}'"> <i class="fa-regular fa-user me-2 mt-1"></i> Đăng nhập để bình luận</button>
                            @endauth
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-qtn-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-qtn" type="button" role="tab" aria-controls="nav-qtn"
                                    aria-selected="true">Quan tâm
                                    nhất</button>
                                <button class="nav-link" id="nav-mt-tab" data-bs-toggle="tab" data-bs-target="#nav-mt"
                                    type="button" role="tab" aria-controls="nav-mt" aria-selected="false">Mới
                                    nhất</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-qtn" role="tabpanel"
                                aria-labelledby="nav-qtn-tab" tabindex="0">
                                <div class="comments mt-3">
                                    <div class="comment mb-3">
                                        <div class="d-flex align-items-start">
                                            <div
                                                class="avatar rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center me-3">
                                                V</div>
                                            <div class="flex-grow-1">
                                                <div class="comment-header d-flex justify-content-between">
                                                    <span class="fw-bold">viet.buitrong04</span>
                                                    <span>7h trước</span>
                                                </div>
                                                <p class="w-75 mt-2">Chỉ có Ấn Độ mới có tỷ lệ chênh lệch giàu nghèo rõ rệt
                                                    như thế
                                                    này
                                                </p>
                                                <div class="comment-footer d-flex align-items-center">
                                                    <button
                                                        class="btn btn-link text-decoration-none p-0 me-3">Thích</button>
                                                    <span class="me-3">82</span>
                                                    <button class="btn btn-link text-decoration-none p-0">Trả lời</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashed-line"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-mt" role="tabpanel" aria-labelledby="nav-mt-tab"
                                tabindex="0">
                                <div class="comments mt-3">
                                    <div class="comment mb-3">
                                        <div class="d-flex align-items-start">
                                            <div
                                                class="avatar rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center me-3">
                                                V</div>
                                            <div class="flex-grow-1">
                                                <div class="comment-header d-flex justify-content-between">
                                                    <span>viet.buitrong04</span>
                                                    <span>7h trước</span>
                                                </div>
                                                <p class="w-75">Chỉ có Ấn Độ mới có tỷ lệ chênh lệch giàu nghèo rõ rệt
                                                    như thế
                                                    này</p>
                                                <div class="comment-footer d-flex align-items-center">
                                                    <button
                                                        class="btn btn-link text-decoration-none p-0 me-3">Thích</button>
                                                    <span class="me-3">82</span>
                                                    <button class="btn btn-link text-decoration-none p-0">Trả lời</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="row" style=" background-color: rgb(235, 235, 235);">
            <nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #d7d9e4; font-size: 14px">
                <div class="container-fluid">
                    <a class="nav-after navbar-brand" style="color: rgb(9, 9, 138);" href="">Tin liên quan</a>
                </div>
            </nav>
            @include('client.slideShow/slide-show-tinlienquan')
        </div>
    </div>
@endsection
