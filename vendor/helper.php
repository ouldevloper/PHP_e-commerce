<?php

namespace Vendor;
//use Vendor\Helper;

trait  Helper{
    public static function hash($plain){
        return password_hash($plain,PASSWORD_BCRYPT);
    } 

    public static function isValid($plain,$hash){
        return password_verify($plain,$hash);
    }
}