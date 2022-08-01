<?php
namespace Models;
class Category{
    protected static $tableName = "category";
    protected static $primary   = "id";
    protected static $fields = array(
                            "id",
                            "label",
                            "description",
                            "created_at",
                            "updated_at",
    );
    public  $id;
    public  $label;
    public  $description;
    public  $created_at;
    public  $updated_at;
}