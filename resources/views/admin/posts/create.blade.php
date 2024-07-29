@extends('admin.layouts.master')
@section('content')
    <main class="app-content p-4">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Thêm mới Post</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Title: </label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                            name="title">
                    </div>
                    <div class="mb-3">
                        <label for="sku" class="form-label">Short description: </label>
                        <input type="text" class="form-control" id="short_description" aria-describedby="emailHelp"
                            name="short_description">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content: </label>
                        <textarea class="form-control" id="content" cols="30" rows="10" name="content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">IMG: </label>
                        <input type="file" class="form-control" id="img" aria-describedby="emailHelp"
                            name="img">
                    </div>
                    <div class="mb-3">
                        <label for="img_description" class="form-label">Img description: </label>
                        <input type="text" class="form-control" id="img_description" aria-describedby="emailHelp"
                            name="img_description">
                    </div>
                    <div class="mb-3">
                        <label for="views" class="form-label">Views: </label>
                        <input type="text" class="form-control" id="views" aria-describedby="emailHelp"
                            name="views">
                    </div>
                    <div class="mb-3">
                        <label for="category_id " class="form-label">Categories: </label>
                        <select class="form-select" id="category_id " cols="30" rows="10" name="category_id">
                            <option value="" selected>...</option>
                            @foreach ($categories as $id => $item)
                                <option value="{{ $id }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Users: </label>
                        <select class="form-select" id="user_id" cols="30" rows="10" name="user_id">
                            <option value="" selected>...</option>
                            @foreach ($users as $id => $item)
                                <option value="{{ $id }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm mới</button>
                    <a class="btn btn-danger " href="{{ route('admin.posts.index') }}">Quay lại trang View</a>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </main>
@endsection
