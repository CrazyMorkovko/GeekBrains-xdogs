<div class="product">
    <h1><?php echo $product['name']; ?></h1>
    <div class="product__body">
        <div>
            <a href="<?php echo $product['img']; ?>" target="_blank">
                <img class="product__img"
                     src="<?php echo $product['img']; ?>"
                     alt="<?php echo $product['name']; ?>">
            </a>
        </div>
        <div class="product__short-desc">
            <h2>Описание товара</h2>
            <p><?php echo $product['shortDesc']; ?></p>
            <div class="article">Код товара: <?php echo $product['id']; ?></div>
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
            <th>На складе</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td>Цена</td>
            <td colspan="3"><strong>690 рублей</strong></td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>S</td>
            <td>23-24</td>
            <td>29-32</td>
            <td rowspan="2" class="exists">есть</td>
        </tr>
        <tr>
            <td>M</td>
            <td>25-26</td>
            <td>32-35</td>
        </tr>
        <tr>
            <td>L</td>
            <td>33</td>
            <td>38-40</td>
            <td class="wait">ожидается</td>
        </tr>
        <tr>
            <td>XL</td>
            <td>36-37</td>
            <td>47-49</td>
            <td class="not-exists">нет</td>
        </tr>
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
        <p><?php echo $product['desc']; ?></p>
    </div>

    <h2>Отзывы</h2>
</div>