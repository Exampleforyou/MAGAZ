<div class="col-md-4">
    <div class="single-sidebar">
        <h2 class="sidebar-title">Search Products</h2>
        <form action="">
            <input type="text" placeholder="Search products...">
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="single-sidebar">
        <h2 class="sidebar-title">Products</h2>
        <? foreach ($products as $product):?>
        <div class="thubmnail-recent">
            <img src="/Source%20Files/templates/img/product-thumb-1.jpg" class="recent-thumb" alt="">
            <h2><a href="/product/<?=$product['id']?>"><?=$product['name']?></a></h2>
            <div class="product-sidebar-price">
                <ins>$<?=$product['price']?></ins> <del><?=$product['price_old']?></del>
            </div>
        </div>
        <?endforeach;?>
    </div>
</div>