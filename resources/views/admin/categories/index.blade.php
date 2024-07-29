@extends('admin.layouts.master')
@section('content')
    <form class="app-content p-4">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách Categories</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-4 element-button">
                                <a class="btn btn btn-primary mb-3" href="{{ route('admin.categories.create') }}" title="Thêm"><i
                                        class="fas fa-plus"></i>
                                    Tạo mới danh mục</a>
                            </div>
                            <div class="col-8 d-flex justify-content-end" role="search">
                                <input class="form-control w-25" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                <button class="btn btn-outline-primary ms-2" style="height: 38px" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Parent_id</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ dd($data) }} --}}
                                @foreach ($data as $item)
                                    <tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->parent_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('admin.categories.show', $item->id) }}"><button
                                                    class="btn btn-primary btn-sm trash" type="button" title="show"><i
                                                        class="fa-solid fa-eye"></i>
                                                </button></a>
                                            <a href="{{ route('admin.categories.edit', $item->id) }}"> <button
                                                    class="btn btn-success btn-sm" type="button" title="Sửa"
                                                    id="show-emp" data-toggle="modal" data-target="#ModalUP"><i
                                                        class="fas fa-edit"></i></button></a>
                                            <a href="{{ route('admin.categories.destroy', $item->id) }}"
                                                onclick="return confirm('Chắc chắn chưa?')" class="btn btn-danger mb-3"><i
                                                    class="fa-solid fa-trash"></i></a>
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
    </form>
@endsection
