<form class="mb-3" action="{{ route('seacher.submit') }}" method="POST">
    <section>
        @csrf
        <div style="width: 100%; height: 50px; border-radius: 5px "
            class="box_search border p-2 d-flex justify-content-between align-items-center ">
            <input style="border: none ; outline: none" class="ms-2 w-75" type="text" name="key" id=""
                value="{{ old('key', $inputKey) }}" placeholder="Tìm kiếm ">
            <button type="submit" class="border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass "
                    style="color: #555555;"></i></button>

        </div>
    </section>
    <section class="d-flex justify-content-between mb-5 mt-3" style="height: auto">

        <div class=" list_seacher  form-control w-25  ">
            <div class="mb-5">
                <div class="text_cate mb-3 fw-semibold">
                    Chuyên mục
                </div>
                {{-- <form action="{{ route('seacher.submit') }}" method="POST"> --}}
                <select class="form-select" name="category" aria-label="Default select example">
                    <option selected>Tìm kiếm theo thể loại</option>
                    @foreach ($categoryAll as $cate)
                        <option value="{{ $cate->name }}" @if (old('category', $inputCate) == $cate->id) selected @endif>
                            {{ $cate->name }}
                        </option>
                    @endforeach
                </select>
                {{--
                </form> --}}
            </div>
            <div>
                <div class="text_loc_art mb-3 fw-semibold">
                    Lọc bài viết theo
                </div>
                {{-- <form action="{{ route('seacher.submit') }}" method="POST"> --}}
                <select class="form-select" name="time" aria-label="Default select example">
                    <option selected>Tìm kiếm theo thời gian</option>
                    <option value="now" @if (old('time', $time) == 'now') selected @endif>Hiện tại</option>
                    <option value="dayAgo" @if (old('time', $time) == 'dayAgo') selected @endif>1 ngày trước
                    </option>
                    <option value="weekAgo" @if (old('time', $time) == 'weekAgo') selected @endif>1 tuần
                        trước</option>
                    <option value="monthAgo" @if (old('time', $time) == 'monthAgo') selected @endif>1 tháng
                        trước</option>
                    <option value="yearAgo" @if (old('time', $time) == 'yearAgo') selected @endif>1 năm trước
                    </option>
                </select>
            </div>
        </div>
        <div class="content_seacher w-75 p-3 ps-5  ">
            @foreach ($article as $art)
                <a href=""
                    class="box-category-item-main-left text-decoration-none text-dark pe-3 d-flex gap-3 mb-3">
                    <img src="{{ asset('images/' . $art->img) }}" alt="lỗi ảnh " id="anh" width="250px">
                    <div class="content_category-item-main-left">
                        <h4>
                            {{ $art->title }}
                        </h4>
                        <p style="font-size: 13px">
                            {{ $art->summary }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</form>
