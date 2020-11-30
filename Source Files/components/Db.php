<?php

/**
 *  Подключение в БД, все данные в /config/db_info.php
 */
class Db
{
    static function getConnection()
    {
        $db_params = require(ROOTSF . '/config/db_info.php');
        $dsn = "mysql:host={$db_params['host']};dbname={$db_params['name']}";
        $db = new PDO($dsn, $db_params['login'], $db_params['password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

    static function getQuery($query)
    {
        $db = Db::getConnection();
        $query = $db->query($query);
        return $query;

    }
}