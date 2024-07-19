@extends('client.layouts.master')
@section('content')
    {{-- --}}
    {{-- --}}
    <div class="row custom-menu fw-semibold" style="font-size: 14px">
        <nav class="navbar navbar-expand-lg fw-semibold">
            <div class="container-fluid">
                <a class="nav-after navbar-brand" style="font-size: 17px" href="{{ route('trangdm', $loadCate->id) }}">{{ $loadCate->name }}</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                        {{-- {{ dd($post) }} --}}
                        @foreach ($loadCate->children as $item)
                            <li class="nav-item dashed-line-trangdm
                            @if ($item->id == $category->id)
                                border-bottom border-danger
                            @endif">
                                <a class="nav-link active" href="{{ route('trangdm', $item) }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- --}}
    <div class="row mt-1 d-flex justify-content-between">
        <div class="col-9" style="width: 975px">
            <div class="row fw-semibold mt-4">
                @foreach ($post as $item)
                    <a href="{{ route('chitiettin', $item) }}" class="text-decoration-none text-dark">
                        <div class="row d-flex mb-2 mt-1">
                            <div class="col-3">
                                <img src="{{ asset('img/' . $item->img) }}" alt="" style=" width: 100%;">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-bold">{{ $item->title }}
                                </h4>
                                <p class="fw-light" style="font-size: 14px">{{ $item->short_description }}</p>
                            </div>
                        </div>
                    </a>
                    <div class="dashed-line"></div>
                @endforeach
            </div>
            <div class="row mt-4">
                <div class="d-flex justify-content-center">{{ $post->links() }}</div>
            </div>
        </div>

        <div class="col-3">
            <button class="btn btn-danger w-100">YÊU THÍCH</button>
            <div class="row fw-semibold mt-2">
                @foreach ($topPosts as $item)
                    <a href="{{ route('chitiettin', $item) }}" class="text-decoration-none text-dark">
                        <div class="row d-flex  mb-2 mt-1">
                            <div class="col-5">
                                <img src="{{ asset('img/' . $item->img) }}" alt="" style=" width: 100%;">
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
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/banner-dm.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/banner-dm1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
