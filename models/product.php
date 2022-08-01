<?php
namespace Models;
class Product{
    protected static $tableName = "product";
    protected static $primary   = "id";
    protected static $fields = array(
        "id",
        "title",
        "price",
        "description",
        "quantity",
        "image",
        "category_id",
        "created_at",
        "updated_at",
    );
    public $id          ;
    public $title       ;
    public $price       ;
    public $description ;
    public $quantity    ;
    public $image       ;
    public $category_id ;
    public $created_at  ;
    public $updated_at  ;
}