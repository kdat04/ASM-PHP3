<div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-tinmoi" role="tabpanel" aria-labelledby="pills-tinmoi-tab"
                tabindex="0">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold mt-3">
                    @foreach ($newPosts as $new)
                    <li class="nav-item ">
                        <a href="{{ route('client.chitiettin', $new) }}" class="text-decoration-none text-dark">
                            <div class="row d-flex mb-2">
                                <div class="col-5">
                                    <img src="{{ asset($new->img) }}" alt="" style=" width: 100%;" height="100px">
                                </div>
                                <div class="col-7">
                                    <span>{{ $new->title }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>
        </div>
        <div class="tab-pane" id="pills-docnhieu" role="tabpanel" aria-labelledby="pills-docnhieu-tab" tabindex="0">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold mt-3">
                    @foreach ($topPosts as $post)
                    <li class="nav-item ">
                        <a href="{{ route('client.chitiettin', $post) }}" class="text-decoration-none text-dark">
                            <div class="row d-flex mb-2">
                                <div class="col-5">
                                    <img src="{{ asset($post->img) }}" alt="" style=" width: 100%;" height="100px" >
                                </div>
                                <div class="col-7">
                                    <span>{{ $post->title }}</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    @endforeach

                </ul>
        </div>
</div>
