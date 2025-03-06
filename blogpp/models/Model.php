<?php
require "Database.php";

abstract class Model {
    protected static $db;

    public static function init() {
        if (!self::$db) {
          self::$db = new Database();
        }
      }

    abstract protected static function getTableName(): string;

    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();
      
        $records = self::$db->query($sql)->fetchAll();
        return  $records;
      }


      public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id";
        $record = self::$db->query($sql, ["id" => $id])->fetch();
        return $record;
      }

    
      public static function create(string $content) {
        self::init();  
        $sql = "INSERT INTO " . static::getTableName() . " (content) VALUES (:content)";
        $statement = self::$db->query($sql, ["content" => $content]);

      }

    
      public static function save(string $content, int $id) {
        self::init();
        $sql = "UPDATE " . static::getTableName() . " SET content = :content WHERE id = :id";
        $statement = self::$db->query($sql, ["content" => $content, "id" => $id]);
      }

      public static function delete(int $id) {
        self::init();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = :id";
        $statement = self::$db->query($sql, ["id" => $id]);
      }


       
}