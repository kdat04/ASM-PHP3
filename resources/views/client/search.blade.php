@extends('client.layouts.master')
@section('content')

    <form class="mt-5" role="search" method="post" action="{{ 'search' }}">
        @csrf
        <div class="d-flex justify-content-center">
            <input class="form-control me-2 w-75" type="search" placeholder="Tìm kiếm" aria-label="Search" name="key" value="{{ old('key', $inputKey) }}">
            <button class="btn btn-outline-danger" type="submit">Tìm kiếm</button>
        </div>
        <div class=" mt-3 mb-3 border-bottom border-danger "></div>
        <div class="row">
            <div class="col-4 card">
                <div class="row p-3">
                    <h5 class="text-center text-bg-danger p-2 rounded-2" style="font-size: 17px">Thời gian</h5>
                    <select class="form-select" aria-label="Default select example" name="time">
                        <option selected value="">...</option>
                        <option value="now" @if (old('time', $time) == 'now') selected @endif>Hiện tại</option>
                        <option value="day" @if (old('time', $time) == 'day') selected @endif>1 ngày trước</option>
                        <option value="week" @if (old('time', $time) == 'week') selected @endif>1 tuần trước</option>
                        <option value="month" @if (old('time', $time) == 'month') selected @endif>1 tháng trước</option>
                        <option value="oneyear" @if (old('time', $time) == 'oneyear') selected @endif>1 năm trước</option>
                    </select>
                </div>
                <div class="row p-3">
                    <h5 class="text-center text-bg-danger p-2 rounded-2" style="font-size: 17px">Danh mục</h5>
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected value="">...</option>
                        @foreach ($loadAll as $load)
                            <option value="{{ $load->id }}" @if (old('category', $inputCate) == $load->id) selected @endif>
                                {{ $load->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-8">
                @foreach ($posts as $item)
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('img/'. $item->img) }}" alt="" width="100%" height="230px">
                    </div>
                    <div class="col-8">
                        <span>{{ $item->created_at }}</span>
                        <h4 class="fw-bold">{{ $item->title }}</h4>
                        <p>{{ $item->short_description }}</p>
                    </div>
                </div>
                <div class="dashed-line mt-3 mb-3"></div>
                @endforeach
            </div>
        </div>
    </form>
@endsection
