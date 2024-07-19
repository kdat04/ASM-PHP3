<div class="row owl-carousel owl-theme ">
    @foreach ($theThao->postCate as $tt)
        <a href="{{ route('chitiettin', $tt) }}" class="nav-link active">
            <div class=" p-2">
                <img src="{{ asset('img/' . $tt->img) }}" alt="" style=" width: 100%;" height="250px">
                <h5 class="mt-2" style="font-size: 15px;">{{ $tt->title }}
                </h5>
            </div>
        </a>
    @endforeach
</div>
