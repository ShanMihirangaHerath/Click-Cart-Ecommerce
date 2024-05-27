<?php
class Database {
    public static $connection;
    public static function setUpConnection() {
        if(!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "Shan_200630103728", "clickcart", "3306");
        }
    }
    public static function cud($query){
        Database::setUpConnection();
        Database::$connection->query($query);
    }
    public static function select($query){
        Database::setUpConnection();
        $resultset = Database::$connection->query($query);
        return $resultset;
    }
}
