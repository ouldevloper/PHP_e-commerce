<?php
namespace Models;
class SocialMedia{
    protected static $tableName = "sacialmedia";
    protected static $primary   = "id";
    protected static $fields = array(
        "id",
        "link",
        "icon_path",
        "created_at",
        "updated_at",
    );
    public $id;
    public $link;
    public $icon_path;
    public $created_at;
    public $updated_at;
}