<footer class="mt-5">
    <div class="dashed-line"></div>
    <div class="d-flex justify-content-center mt-4">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-house"></i></a>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class><i class="fa-solid fa-bars"></i></span>
                </button>
                <ul class="menu-cha navbar-nav me-auto mb-2 mb-lg-0 fw-semibold " style="font-size: 14px">
                    @for ($i = 0; $i < $loadAll->count(); $i++)
                        @if ($i < 10)
                            <li class="nav-item ">
                                <a class="nav-link active" href="#">{{ $loadAll[$i]->name }}</a>
                                <ul class="menu-con navbar-nav" style="font-size: 13px">
                                    @foreach ($loadAll[$i]->children as $load)
                                        <li><a class="nav-link active" href="">{{ $load->name }}</a></li>
                                        <div class="dashed-line"></div>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </nav>
    </div>
    <div class="dashed-line"></div>
    <div class="mt-4 mb-4"><span class="d-flex justify-content-center fw-bold">KÊNH THÔNG TIN CỦA CHÍNH PHỦ DO TTXVN
            PHÁT HÀNH</span></div>
    <div class="dashed-line"></div>
    <div class="row d-flex">
        <div class="col-2">
            <img src="{{ asset(' img/logo.jpg') }}" alt="" width="180px" style=" width: 100%;">
        </div>
        <div class="col-5 mt-3">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                <li class="nav-item ">
                    <a class="nav-link active " href="#">Tòa soạn: Số 5 Lý Thường Kiệt, Hà Nội</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#">Điện thoại: 024.38248605 - Fax: 024.38253753</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#">Fax: 024-38253753</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#">Email:baotintuc@vnanet.vn – toasoantintuc@gmail.com</a>
                </li>
            </ul>
        </div>
        <div class="col-5 mt-3">
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item ">
                    <a class="nav-link active " href="#">Giấy phép số 173/GP-BTTTT cấp ngày 04/4/2022</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#">© Bản quyền thuộc về Báo Tin tức - TTXVN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#">Cấm sao chép dưới mọi hình thức nếu không có sự chấp
                        thuận bằng
                        văn bản</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
