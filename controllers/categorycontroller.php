<?php

namespace Controllers;
use Vendor\Controller;
class CategoryController extends Controller{
    protected $tableName = "";
    public function __construct(){

    }


    public function index(){
        return \view("index",["data"=>"hello world"]);
    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function retrive(){

    }

}