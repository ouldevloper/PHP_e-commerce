<?php

namespace Vendor;
use Vendor\Loader;

class Loader{
    public static function boot($className){
        $class = $className;
        $class = \strtolower($class);
        $class = str_replace("\\","/",$class);
        $class = realpath(__DIR__)."/../".$class.".php";
        require_once($class);
    }
}
spl_autoload_register(__NAMESPACE__."\\Loader::boot");