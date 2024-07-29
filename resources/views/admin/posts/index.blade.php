@extends('admin.layouts.master')
@section('content')
<main class="app-content p-4">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Posts</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn btn-primary mb-3" href="{{ route('admin.posts.create') }}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>IMG</th>
                                <th>Img_description</th>
                                <th>Views</th>
                                <th>Category_id</th>
                                <th>User_id </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>{{ $item->id }}</td>
                                <td style="width: 300px">{{ $item->title }}</td>
                                <td class="d-flex justify-content-center"><img src="{{ asset($item->img) }}" alt="" width="150px"></td>
                                <td style="width: 500px">{{ $item->img_description }}</td>
                                <td>{{ $item->views }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td class="d-flex justify-content-between">
                                    <a href="{{ route('admin.posts.show', $item) }}"><button
                                            class="btn btn-primary btn-sm trash" type="button" title="show"><i
                                                class="fa-solid fa-eye"></i>
                                        </button></a>
                                    <a href="{{ route('admin.posts.edit', $item) }}"> <button
                                            class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                                            data-toggle="modal" data-target="#ModalUP"><i
                                                class="fas fa-edit"></i></button></a>
                                    <form action="{{ route('admin.posts.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Bạn có chắc chắn chắn xóa không ?')"
                                            type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</main>
@endsection
