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


            <?php
            include ROOTSF . '/templates/leftside.php';
            ?>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="/">Home</a>
                        <a href="/category/<?=$productItem['category_id']?>"><?=$productItem['category']?></a>
                        <a href="/product/<?=$productItem['id']?>"><?=$productItem['name']?></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="/Source Files/templates/img/product-<?=$productItem['id']?>.jpg" alt="">
                                </div>

                                <div class="product-gallery">
                                    <img src="/Source Files/templates/img/product-thumb-1.jpg" alt="">
                                    <img src="/Source Files/templates/img/product-thumb-2.jpg" alt="">
                                    <img src="/Source Files/templates/img/product-thumb-3.jpg" alt="">
                                    <img src="/Source Files/templates/img/product-thumb-4.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?=$productItem['name']?></h2>
                                <div class="product-inner-price">
                                    <ins>$<?=$productItem['price']?></ins> <del>$<?=$productItem['price_old']?></del>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>



                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
                                            <p><?=$productItem['description']?></p>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">

                            <? foreach ($bestProducts as $bestProduct):?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="/Source Files/templates/img/product-<?=$productItem['id'];?>.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="/product/<?=$bestProduct['id']?>"><?=$bestProduct['name']?></a></h2>

                                <div class="product-carousel-price">
                                    <ins>$<?=$bestProduct['price']?></ins> <del>$<?=$bestProduct['price_old']?></del>
                                </div>
                            </div>
                            <?endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
<?php
include FOOTER;
