<?php
namespace Models;
use Models\Model;
class Aboutus extends Model{
    protected static $TableName = "aboutus";
    protected static $fields = array(
                                'id',
                                'title',
                                'description',
                                'img_path',
                                'created_at',
                                'updated_at',
                                );
    protected static $primary = "id";
    public $id;
    public $title;
    public $description;
    public $img_path;
    public $created_at;
    public $updated_at;
}