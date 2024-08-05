@extends('admin.layouts.master')
@section('content')
    <form class="app-content p-4" action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Thêm mới Categories</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row gy-4">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mt-3">
                                    <label for="parent_id" class="form-label">Category</label>
                                    <select type="text" class="form-select" name="parent_id" id="parent_id">
                                        <option value="" selected>Trống</option>
                                        @foreach ($parentCate as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <button class="btn btn-primary" type="submit">Thêm mới</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
            <!--end col-->
        </div>

    </form>
@endsection
