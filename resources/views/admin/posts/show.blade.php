@extends('admin.layouts.master')
@section('content')
    <main class="app-content p-4">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Chi tiết Posts | </b></a></li>
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
                                {{-- {{ dd($post) }} --}}
                                @foreach ($post->toArray() as $key => $value)
                                    <tr>
                                        <td>{{ ucfirst($key) }}</td>
                                        <td>
                                            @if ($key == 'img')
                                                <img src="{{ asset('img/' . $value) }}" alt="" width="100px">
                                            @elseif ($key == 'category_id')
                                                {{ $post->category->name }}
                                            @elseif ($key == 'content')
                                                {!! $value !!}
                                            @else
                                                {{ $value }}
                                            @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary " href="{{ route('admin.posts.index') }}">Quay lại trang View</a>
                </div>
            </div>
    </main>
@endsection
