<?php
namespace Models;
class Contactus{
    protected static $tableName = "contactus";
    protected static $primary   = "id";
    protected static $fields = array(
                                "id",
                                "name",
                                "email",
                                "subject",
                                "message",
                                "is_read",
                                "created_at",
                                "updated_at",
                                );
    public $id;
    public $name;
    public $email;
    public $subject;
    public $message;
    public $is_read;
    public $created_at;
    public $updated_at;

}