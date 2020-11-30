<?php
return [
//  'uri'		=> 'nameController/actionList/another params'

    'news/([0-9]+)'   /*example*/	=> 'news/views/$1',

    'shop/page-([0-9])+'=> 'product/index/$1',
    'shop'              => 'product/index',

    'category/([0-9])+/page-([0-9])+'    => 'product/category/$1/$2',
    'category/([0-9])+' => 'product/category/$1/',
    'category'          => 'product/categories',

    'cart'              => 'authorisation/cart',
    'auth'              => 'authorisation/index',
    'register'          => 'authorisation/register',

    'product/([0-9])+'  => 'product/singleProduct/$1',

    'other'             => 'other/index',
    'contact'           => 'other/contact',
    ''  /*homepage*/    => 'home/index'
];

