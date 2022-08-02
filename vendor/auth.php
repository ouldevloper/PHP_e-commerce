<?php
<<<<<<< HEAD

=======
namespace Vendor;
>>>>>>> 631dda2 (Second Commit)
class Auth{
    private $data = [];
    public static function check(){

    }
    public static function auth(){

    }
<<<<<<< HEAD
    
=======
    public static function start(){
        session_start();
    }
    public static function end(){
        if(session_id())
            session_destroy();
    }
>>>>>>> 631dda2 (Second Commit)
}