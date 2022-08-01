<?php

require_once "./public/config.php";
require_once "./vendor/loader.php";

use Controllers\ProductController;
use Models\User;
$u = new User;
$u->id ="hello";
$u->name ="hello";
$u->email ="hello";
$u->username ="hello";
$u->email_verified_at ="hello";
$u->password ="hello";
$u->img_path ="hello";
$u->role ="hello";
$u->remember_token ="hello";
$u->created_at ="hello";
$u->updated_at ="hello";
$u->insert();
use Vendor\Helper;
echo Helper::isValid('1234','$2y$10$sgFRIUWyPQHzoq.mjp2b5erM0EiMUV9MPjzAWz7N9qpUqvqKuEtkO');
//$p = new ProductController();
//echo "hello world";