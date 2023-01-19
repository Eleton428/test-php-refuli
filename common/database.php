<?php

/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {
    try
    {
        $database_handler = new PDO(" mysql:b2c11c8490b6a5:5b6e2134@us-cdbr-east-06.cleardb.net/heroku_9dc1935c3b3c5b3");
        //mysql://b2c11c8490b6a5:5b6e2134@us-cdbr-east-06.cleardb.net/heroku_9dc1935c3b3c5b3?reconnect=true
        //'mysql:localhost=db;dbname=simple_memo;charset=utf8mb4', 'root', 'password'

    }
    catch (PDOException $e)
    {
        echo "DB接続に失敗しました。<br />";
        echo $e->getMessage();
        exit;
    }
    return $database_handler;
}