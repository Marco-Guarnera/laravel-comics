@extends("layouts.app")

@section("page-title", "Product")

<!-- Product -->
@section("main")
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <span class="card-text">{{ $product['price'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
