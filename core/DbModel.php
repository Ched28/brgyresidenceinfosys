<?php

namespace app\core;

use app\models\AddEmployee;

abstract class DbModel extends Model
{
    abstract public function tableName() : string;

    abstract public function attributes() : array;

    abstract public function TransactTable() : string;

    abstract public function attributesforTransact() : array;

    abstract public function primaryKey() : string;


    public function save(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();

        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(",", $attributes).") VALUES (".implode(",", $params).")");
        foreach ($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public function saveForTransaction(){
        $transactable = $this->TransactTable();
        $attributeforTransaction = $this->attributesforTransact();

        $params = array_map(fn($attr) => ":$attr", $attributeforTransaction);
        $statement = self::prepare("INSERT INTO $transactable (".implode(",", $attributeforTransaction).") VALUES (".implode(",", $params).")");
        foreach ($attributeforTransaction as $attribute1){
            $statement->bindValue(":$attribute1", $this->{$attribute1});
        }

        $statement->execute();
        return true;

    }

    public static function prepare($sql){
        return Application::$app->db->pdo->prepare($sql);
    }

    public static function findOne($where){
        $tableName = (new \app\models\AddEmployee)->tableName();
        $attributes = array_keys($where);
        $sql = implode("AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");

        foreach ($where as $key => $item){
            $statement->bindValue(":$key", $item);

        }

        $statement->execute();
        return $statement->fetchObject(static::class);




    }

}