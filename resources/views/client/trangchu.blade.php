@extends('client.layouts.master')
@section('content')
    <main>
        <!--  -->
        <div class="row mt-4 d-flex justify-content-between">
            <div class="col-8 p-3">
                @foreach ($viewsHighest as $top)
                    <a href="{{ route('client.chitiettin', $top) }}" class="text-decoration-none text-dark">
                        <img src="{{ asset($top->img) }}" alt=" " style=" width: 100%;">
                        <div class="row">
                            <h2 class="mt-3" style="font-size: 25px;">{{ $top->title }}</h2>
                            <p>{{ $top->short_description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-4">
                <div class="row card p-3">
                    <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation" style="width: 180px">
                            <button class="nav-link active w-100" id="pills-tinmoi-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-tinmoi" type="button" role="tab" aria-controls="pills-tinmoi"
                                aria-selected="true">Tin mới</button>
                        </li>
                        <li class="nav-item" role="presentation" style="width: 180px">
                            <button class="nav-link w-100" id="pills-docnhieu-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-docnhieu" type="button" role="tab"
                                aria-controls="pills-docnhieu" aria-selected="true">Đọc nhiều</button>
                        </li>
                    </ul>
                    <div class="dashed-line"></div>
                    {{-- Modal --}}
                    @include('client.modals/modal-tm-dn')
                </div>
            </div>
        </div>
        <!--  -->
        <div class="dashed-line "></div>
        <div class="dashed-line mb-4"></div>
        <!-- post show -->
        <div class="row" style=" background-color: rgb(235, 235, 235);">
            <nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #d7d9e4; font-size: 14px">
                <div class="container-fluid">
                    <a class="nav-after navbar-brand" style="color: rgb(9, 9, 138);" href="#">{{ $gocNhin->name }}</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                            @foreach ($gocNhin->children as $gn)
                                <li class="nav-item ">
                                    <a class="nav-link active " href="{{ route('client.trangdm', $gn->id) }}">{{ $gn->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
            @include('client.slideShow/slide-show-gocnhin')
        </div>
        <div class="dashed-line mt-4"></div>
        <div class="dashed-line"></div>
        <!--  -->
        <div class="row mt-4 d-flex justify-content-between">
            <div class="col-6 card" style="width: 530px">
                <div class="row fw-semibold">
                    @foreach ($loadPost as $all)
                        <a href="{{ route('client.chitiettin', $all) }}" class="text-decoration-none text-dark">
                            <div class="row d-flex justify-content-between mt-3">
                                <div class="col-4">
                                    <img src="{{ asset($all->img) }}" alt="" style=" width: 100%;"
                                        height="150px">
                                </div>
                                <div class="col-8">
                                    <span class="fw-bold mt-2 text-danger">{{ $all->category->name }}</span>
                                    <h6 class="fw-bold mt-2">{{ $all->title }}</h6>
                                    <span style="font-size: 11px">{{ $all->short_description }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dashed-line mt-4"></div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">{{ $loadPost->links() }}</div>
            </div>
            <!--  -->
            <div class="col-7">
                @foreach ($loadAll as $item)
                    <div class="row fw-semibold ">
                        <nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #eeeeee; font-size: 15px">
                            <div class="container-fluid">
                                <a class="nav-after-1 navbar-brand text-danger fs-6 "
                                    href="#">{{ $item->name }}</a>
                                <div class="collapse navbar-collapse">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                                        @foreach ($item->children as $all)
                                            <li class="nav-item ">
                                                <a class="nav-link active " href="{{ route('client.trangdm', $all->id) }}">{{ $all->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="row">
                            @foreach ($item->postCate()->orderBy('views', 'desc')->limit(1)->get() as $dm)
                                {{-- {{ dd($ts) }} --}}
                                <a href="{{ route('client.chitiettin', $item) }}" class="text-decoration-none text-dark">
                                    <div class="row d-flex mb-2 mt-1">
                                        <div class="col-6">
                                            <img src="{{ asset($dm->img) }}" alt="" style=" width: 100%;">
                                        </div>
                                        <div class="col-6">
                                            <h5 class="fw-bold mt-3">{{ $dm->title }}</h5>
                                        </div>
                                    </div>
                                    <div class="row fw-light">
                                        <span>{{ $dm->short_description }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="dashed-line mt-4 mb-4"></div>
                @endforeach
            </div>
        </div>
        <!-- post show -->
        <div class="row" style=" background-color: rgb(235, 235, 235);">
            <nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #d7d9e4; font-size: 14px">
                <div class="container-fluid">
                    <a class="nav-after navbar-brand" style="color: rgb(9, 9, 138);"
                        href="">{{ $theThao->name }}</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                            @foreach ($theThao->children as $tt)
                                <li class="nav-item ">
                                    <a class="nav-link active " href="{{ route('client.trangdm', $tt->id) }}">{{ $tt->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
            @include('client.slideShow/slide-show-thethao')
        </div>
    </main>
@endsection
