<?php


class AuthorisationController
{
    function actionIndex()
    {
        $products = Shop::getLatestProducts();
        include ROOTSF.'/views/auth/login.php';
        return true;
    }
    function actionCart()
    {
        echo 'actionCart';
        return true;
    }

    function actionRegister()
    {
        echo 'actionRegister';
        return true;
    }
    function actionLogin()
    {
        $products = Shop::getLatestProducts();
        return true;
    }
}