<?php
namespace Models;
use Vendor\Model;
class User extends Model{
    protected static $tableName = "users";
    protected static $fields = array(
                        'id',
                        'name',
                        'email',
                        'username',
                        'email_verified_at',
                        'password',
                        'img_path',
                        'role',
                        'remember_token',
                        'created_at',
                        'updated_at',
                         );
    protected static $keys = [
        "primary"         => "id",
        "auto_increament" => "id",
    ];
    public $id; 
    public $name;
    public $email;
    public $username;
    public $email_verified_at;
    public $password;
    public $img_path;
    public $role;
    public $remember_token;
    public $created_at;
    public $updated_at; 
}