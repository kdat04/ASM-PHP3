<div class="row owl-carousel owl-theme ">
    @foreach ($postLq as $tin)
    {{-- {{ dd($tin) }} --}}
        <a href="{{ route('client.chitiettin', $tin) }}" class="nav-link active">
            <div class=" p-2">
                <img src="{{ asset($tin->img) }}" alt="" style=" width: 100%;" height="250px">
                <h5 class="mt-2" style="font-size: 15px;">{{ $tin->title }}
                </h5>
            </div>
        </a>
    @endforeach

</div>
