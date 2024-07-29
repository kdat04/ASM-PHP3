@extends('admin.layouts.master')
@section('content')
    <main class="app-content p-4">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Chi tiết Categories | </b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ dd($show) }} --}}
                                @foreach ($show->toArray() as $key => $value)
                                    <tr>
                                        <td>{{ ucfirst($key) }}</td>
                                        <td>
                                            {{ $value }}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary " href="{{ route('admin.categories.index') }}">Quay lại trang View</a>
                </div>
            </div>
    </main>
@endsection
