<?php

namespace Vendor;

class DB{
    private static $cnx=null;
    public static function prepare(){
        if (self::$cnx == null){
            try{
                self::$cnx = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";",DB_USER,DB_PASS);
            }catch(\PDOException $err){
                return null;
            }
        }
        return self::$cnx;
    }
}