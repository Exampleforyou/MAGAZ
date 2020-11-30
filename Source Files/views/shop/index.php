<?php
include HEADER;
?>


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">


                <? if (isset($categoriesView)):
                    //ПОКАЗ КАТЕГОРИЙ?>

                    <? foreach ($categories as $category):?>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="/Source Files/templates/img/product-<?=$category['id'];?>.jpg" alt="">
                                </div>
                                <h2><a href="/category/<?=$category['category_id'];?>"><?=$category['category_name'];?></a></h2>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    <? endforeach;?>

                <?else: //ПОКАЗ ПРОДУКТОВ ?>


                    <? foreach ($products as $product):?>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="/Source Files/templates/img/product-<?=$product['id'];?>.jpg" alt="">
                                </div>
                                <h2><a href="product/<?=$product['id'];?>"><?=$product['name'];?></a></h2>
                                <div class="product-carousel-price">
                                    <ins><?='$'.$product['price'];?></ins> <del><?='$'.$product['price_old'];?></del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    <? endforeach;?>

                <?endif;?>

            </div>
        </div>
        <!--    PAGINATION -->
        <?php
         $string = $_SERVER['REQUEST_URI'];
         $pattern = '`/category/[0-9]+`';
         $replacement = '/category';
         $cat_replace =  preg_replace($pattern,$replacement,$string);
        if ($cat_replace != '/category')
        {include ROOTSF."/templates/pagination.php";}
        ?>
    </div>

<?php
include FOOTER;

