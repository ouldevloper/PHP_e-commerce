<?php
namespace Models;
class Subscribe{
    protected static $tableName = "subscribe";
    protected static $primary   = "id";
    protected static $fields = array(
                                "id",
                                "email",
                                "created_at",
                                "updated_at",
    );
    public $id ;
    public $email;
    public $created_at;
    public $updated_at;
}