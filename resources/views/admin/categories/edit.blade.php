@extends('admin.layouts.master')
@section('content')
    <form class="app-content p-4" action="{{ route('admin.categories.update', $edit) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Edit Categories</b></a></li>
            </ul>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $edit->name }}">
                                @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="mt-3">
                            <label for="parent_id" class="form-label">Category</label>
                            <select type="text" class="form-select" name="parent_id" id="parent_id">
                                @foreach ($parentCate as $parent)
                                    {{--  --}}
                                    <option value="{{ $parent->id }}"
                                        {{ $edit->parent_id == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-primary" type="submit">Cập nhật</button>
                            <a class="btn btn-success" href="{{ route('admin.categories.index') }}">Quay lại Index</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </form>
@endsection
