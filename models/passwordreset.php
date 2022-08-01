<?php
namespace Models;
class PaswordReset{
    protected static $tableName = "password_reset";
    //protected static $primary   = "id";
    protected static $fields = array(
                                "email",
                                "token",
                                "created_at",
                                );
    public $email;
    public $token;
    public $created_at;
}