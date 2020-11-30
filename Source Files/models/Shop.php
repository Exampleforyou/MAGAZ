<?php


class Shop
{
    const DEFAULT_PRODUCT_COUNT_ON_PAGE = 8;
    const DEFAULT_PRODUCT_COUNT_ON_LEFTSIDE = 5;

    const DEFAULT_BEST_PRODUCT_COUNT = 2;

    private static function getIdNamePriceOld ($query)
    {
        $result =[];

        while ($row = $query->fetch(PDO::FETCH_ASSOC) )
        {
            static $i = 0;
            $i++;
            $result[$i]['id']           = $row['id'];
            $result[$i]['name']         = $row['name'];
            $result[$i]['price']        = $row['price'];
            $result[$i]['price_old']    = $row['price_old'];
        }
        return $result;
    }

    static function getProductsByPage ($page_id,$count = self::DEFAULT_PRODUCT_COUNT_ON_PAGE)
    {
        $db = DB::getConnection();
        $limit = ($page_id-1) * $count;
        $query = $db->query("SELECT `id`,`name`,`price`,`price_old` FROM `product` LIMIT $limit, $count");
        return self::getIdNamePriceOld($query);
    }

    static function getProductById ($product_id)
    {
        $db = Db::getConnection();
        $query = $db->query("SELECT * FROM `product` WHERE `id` = $product_id");

        $row = $query->fetch(PDO::FETCH_ASSOC);

        $result = [];

        $result['name']         = $row['name'];
        $result['description']  = $row['description'];
        $result['id']           = $row['id'];
        $result['price']        = $row['price'];
        $result['price_old']    = $row['price_old'];
        $result['category_id']  = $row['category_id'];

        $category_id = $result['category_id'];

        $query2 = $db->query("SELECT `name` FROM `category_id` WHERE `id` = $category_id");
        $row2 = $query2->fetch(PDO::FETCH_ASSOC);

        $result['category'] = $row2['name'];

        return $result;
    }

    static function getLatestProducts ($count=self::DEFAULT_PRODUCT_COUNT_ON_LEFTSIDE)
    {
        $db = Db::getConnection();
        $query = $db->query("SELECT `id`,`name`,`price`,`price_old` FROM `product` LIMIT $count");
        return self::getIdNamePriceOld($query);

    }

    static function getBestProducts ($count=self::DEFAULT_BEST_PRODUCT_COUNT)
    {
        $db = Db::getConnection();
        $query = $db->query("SELECT `id`,`name`,`price`,`price_old` FROM `product` ORDER BY `id` LIMIT $count");
         return self::getIdNamePriceOld($query);


    }

    static function getProductsByCategory ($category_id)
    {
         $db = Db::getConnection();
         $query = $db->query("SELECT `id`,`name`,`price`,`price_old` FROM `product` WHERE `category_id` = $category_id");
         return self::getIdNamePriceOld($query);
    }

    static function getCategories ()
    {
        $db = Db::getConnection();
        $result = [];

        $query = $db->query("SELECT * FROM `category_id`");
        while ($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            static $i;
            $i++;
            $result[$i]['category_id'] = $row['id'];
            $result[$i]['category_name'] = $row['name'];
        }
        return $result;
    }

}