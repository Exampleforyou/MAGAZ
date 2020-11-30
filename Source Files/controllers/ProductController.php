<?php


class ProductController
{
    /*
     *       shop/page-([0-9])+
     */
    function actionIndex($page_id=1)
    {
        $products = Shop::getProductsByPage($page_id);
        include ROOTSF.'/views/shop/index.php';
        return true;
    }


    /*
     *      category([0-9])+ (shop but only 1 category)
     */
    function actionCategory($category_id,$page_id=1)
    {
        $products = Shop::getProductsByCategory($category_id);
        include ROOTSF.'/views/shop/index.php';
        return true;
    }


    /*
     *      product([0-9])+
     */
    function actionSingleProduct ($product_id)
    {
        $productItem = Shop::getProductById($product_id);
        $products = Shop::getLatestProducts();
        $bestProducts = Shop::getBestProducts();
        include ROOTSF.'/views/shop/singleProduct.php';
        return true;
    }

    function actionCategories ()
    {
        $categories = Shop::getCategories();
        $categoriesView = true;
        include ROOTSF.'/views/shop/index.php';
        return true;
    }

}