@extends('layout')
@section('content')

<h1>Каталог</h1>

<div class="products row">
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card product-card">
                <img class="card-img-top" src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['shortDesc'] }}</p>
                    <div class="row">
                        <div class="col">
                            <a href="/index.php?page=product&id={{ $product['id'] }}" class="btn btn-primary">
                                Просмотр
                            </a>
                        </div>
                        <div class="col d-flex align-items-center justify-content-end">
                            <strong>{{ $product['price'] . " руб." }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection