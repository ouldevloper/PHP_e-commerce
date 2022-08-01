<?php

namespace Vendor;
class Model{

    private function getValues(){
        $values=[];
        foreach(static::$fields as $key){
            if(!\array_key_exists($key,static::$keys)){
                $values []= $this->{$key};
            }
        }
        return $values;
    }
    public function insert(){
        $table = static::$tableName;
        $fields = static::$fields;
        $sql = "INSERT INTO $table VALUES (";
        foreach($fields as $key){
            $sql .= "?,";
        }
        $sql = trim($sql,',');
        $sql .= ")";
        //print($sql);
        print_r($this->getValues());
    }

    public static function update(){
        $table = static::$tableName;
        $filds = static::fields;
        $sql = "INSERT INTO $table VALUES (";
        foreach($fields as $key){
            $sql .= "?,";
        }
        $sql = trim($sql,',');

    }

    public function delete(){

    }

    public function retrive($extends=null){

    }

    public function where(){

    }

    public function find($id){


    }


}