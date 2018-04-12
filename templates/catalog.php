<h1>Каталог</h1>

<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <a href="/index.php?page=product&id=<?php echo $product['id']?>">
                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
            </a>
            <a href="/index.php?page=product&id=<?php echo $product['id']?>"><?php echo $product['name']; ?></a>
            <p><?php echo $product['shortDesc']?></p>
        </div>
    <?php endforeach; ?>
</div>