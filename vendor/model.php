<?php

namespace Vendor;
<<<<<<< HEAD
=======
use Vendor\DB;

>>>>>>> 631dda2 (Second Commit)
class Model{

    private function getValues(){
        $values=[];
        foreach(static::$fields as $key){
<<<<<<< HEAD
            if(!\array_key_exists($key,static::$keys)){
=======
            if(static::$keys['auto_increament']!=$key){
>>>>>>> 631dda2 (Second Commit)
                $values []= $this->{$key};
            }
        }
        return $values;
    }
    public function insert(){
        $table = static::$tableName;
        $fields = static::$fields;
<<<<<<< HEAD
        $sql = "INSERT INTO $table VALUES (";
        foreach($fields as $key){
            $sql .= "?,";
        }
        $sql = trim($sql,',');
        $sql .= ")";
        //print($sql);
        print_r($this->getValues());
=======
        $sql = "INSERT INTO $table (";
        foreach($fields as $key){
            if(static::$keys['auto_increament']!=$key)
                $sql .= "$key,";
        }
        $sql = \trim($sql,",");
        $sql .= ") VALUES (";
        foreach($fields as $key){
            if(static::$keys['auto_increament']!=$key)
                $sql .= "?,";
        }
        $sql = trim($sql,',');
        $sql .= ")";
        $data = $this->getValues();
        try{
            $cnx = DB::prepare();
            $stmnt = $cnx->prepare($sql);
            $res = $stmnt->execute($data);
            print_r($stmnt->errorInfo());
            //var_dump($sql,$data,$res);
        }catch(PDOException $er){
            return $er;
        }
>>>>>>> 631dda2 (Second Commit)
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