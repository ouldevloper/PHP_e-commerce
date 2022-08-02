<?php

$data = [];

function view($path,$data=[]){
    $GLOBALS['data'] = $data;
    extract($GLOBALS['data']);
    $path = $path;
    $path = str_replace(".","/",$path);
    include_once "./public/views/".$path.".php";
}

function assets($path){
    return "./public/assets/".$path;
}

function _($str){
    return htmlentities(addslashes(strip_tags($str)));
}