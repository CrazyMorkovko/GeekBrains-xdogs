@extends('layout')
@section('content')

    <div class="product">
        <h1>{{ $product['name'] }}</h1>
        <div class="product__body">
            <div>
                <a href="{{ $product['img'] }}" target="_blank">
                    <img class="product__img"
                         src="{{ $product['img'] }}"
                         alt="{{ $product['name'] }}">
                </a>
            </div>
            <div class="product__short-desc">
                <h2>Описание товара</h2>
                <p>{{ $product['shortDesc'] }}</p>

                <div class="mb-1">Код товара: {{ $product['id'] }}</div>
                @switch($product['status'])
                    @case(1)
                    <div class="mb-1">На складе: <span class="exists">есть</span></div>
                    @break

                    @case(2)
                    <div class="mb-1">На складе: <span class="not-exists">нет</span></div>
                    @break

                    @case(3)
                    <div class="mb-1">На складе: <span class="wait">ожидается</span></div>
                    @break
                @endswitch

                <div><a class="beauty-button">В корзину</a></div>
            </div>
        </div>
        <h2>Характеристики товара</h2>
        <table>
            <thead>
            <tr>
                <th>Размер</th>
                <th>Длина по спинке</th>
                <th>Объем груди</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td>Цена</td>
                <td colspan="2"><strong>{{ $product['price'] }} рублей</strong></td>
            </tr>
            </tfoot>
            <tbody>
            @foreach ($product["attributes"] as $attribute)
            <tr>
                <td>{{ $attribute['size'] }}</td>
                <td>{{ $attribute['width'] }}</td>
                <td>{{ $attribute['volume'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <h3>Наши преимущества:</h3>
        <ol class="product__check-list">
            <li>Низкие цены</li>
            <li>Все вещи на сайте - в наличии</li>
            <li>Ускоренная доставка заказа</li>
            <li>Акции и бонусы для постоянных клиентов</li>
        </ol>

        <h2>Подробное описание товара</h2>
        <div class="product__desc">
            <p>{{ $product['desc'] }}</p>
        </div>

        <h2>Отзывы</h2>
    </div>

@endsection