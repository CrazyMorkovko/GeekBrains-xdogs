@extends('layout')
@section('content')

    <div class="product">
        <h1>{{ $product['name'] }}</h1>
        <div class="product__body mb-2">
            <div>
                <a href="#" data-toggle="modal" data-target="#enlargePic" class="product-img-link">
                    <img class="product__img" src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
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

                <button type="button" class="btn btn-success">В корзину</button>
            </div>
        </div>
        <h2>Характеристики товара</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-hover">
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
            </div>
            <div class="col-md-6">
                <h3>Наши преимущества:</h3>
                <ol class="product__check-list">
                    <li>Низкие цены</li>
                    <li>Все вещи на сайте - в наличии</li>
                    <li>Ускоренная доставка заказа</li>
                    <li>Акции и бонусы для постоянных клиентов</li>
                </ol>
            </div>
        </div>
        <h2>Подробное описание товара</h2>
        <div class="product__desc">
            <p>{{ $product['desc'] }}</p>
        </div>

        <h2>Отзывы</h2>
    </div>

    <div class="modal fade"
         id="enlargePic"
         tabindex="-1"
         role="dialog"
         aria-labelledby="enlargePicLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enlargePicLabel">{{ $product['name'] }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ $product['img'] }}" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

@endsection