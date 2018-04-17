@extends('layout')
@section('content')

<h1>Каталог</h1>

<div class="products">
    @foreach ($products as $product)
        <div class="product-card">
            <a href="/index.php?page=product&id={{ $product['id'] }}">
                <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
            </a>
            <a href="/index.php?page=product&id={{ $product['id'] }}">{{ $product['name'] }}</a>
            <p>{{ $product['shortDesc'] }}</p>
        </div>
    @endforeach
</div>

@endsection