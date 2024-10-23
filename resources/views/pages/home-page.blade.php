@extends("layouts.app")

@section("page-title", "Homepage")

<!-- Homepage -->
@section("main")
    <div class="container-fluid">
        <div class="row g-3">
            @foreach ($comics_list as $item)
                <div class="col-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
