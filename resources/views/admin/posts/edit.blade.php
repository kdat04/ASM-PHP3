@extends('admin.layouts.master')
@section('content')
    <main class="app-content p-4">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Cập nhập Post</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title: </label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                            name="title" value="{{ $post->title }}">
                        @if ($errors->has('title'))
                            <div class="alert alert-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short description: </label>
                        <input type="text" class="form-control" id="short_description" aria-describedby="emailHelp"
                            name="short_description" value="{{ $post->title }}">
                        @if ($errors->has('short_description'))
                            <div class="alert alert-danger">
                                {{ $errors->first('short_description') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content: </label>
                        <textarea class="form-control" id="content" cols="30" rows="10" name="content">{{ $post->content }}</textarea>
                        @if ($errors->has('content'))
                            <div class="alert alert-danger">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">IMG: </label>
                        <input type="file" class="form-control" id="img" aria-describedby="emailHelp"
                            name="img">
                        <img src="{{ asset($post->img) }}" alt="">
                        @if ($errors->has('img'))
                            <div class="alert alert-danger">
                                {{ $errors->first('img') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="img_description" class="form-label">Img description: </label>
                        <input type="text" class="form-control" id="img_description" aria-describedby="emailHelp"
                            name="img_description" value="{{ $post->img_description }}">
                        @if ($errors->has('img_description'))
                            <div class="alert alert-danger">
                                {{ $errors->first('img_description') }}
                            </div>
                        @endif
                    </div>
                    {{-- <div class="mb-3">
                        <label for="views" class="form-label">Views: </label>
                        <input type="text" class="form-control" id="views" aria-describedby="emailHelp"
                            name="views" value="{{ $post->views }}">
                        @if ($errors->has('views'))
                            <div class="alert alert-danger">
                                {{ $errors->first('views') }}
                            </div>
                        @endif
                    </div> --}}
                    <div class="mb-3">
                        <label for="category_id " class="form-label">Categories: </label>
                        <select class="form-select" id="category_id " cols="30" rows="10" name="category_id">
                            @foreach ($categories as $id => $item)
                                <option @if ($post->category_id == $id) selected @endif value="{{ $id }}">
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <div class="alert alert-danger">
                                {{ $errors->first('category_id') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Cập nhập</button>
                    <a class="btn btn-danger " href="{{ route('admin.posts.index') }}">Quay lại trang View</a>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </main>
@endsection
